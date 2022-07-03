<?php

namespace App\Http\Controllers;

use App\Exports\ConfirmationList;
use App\Exports\WebtopiaExport;
use App\Models\Answer;
use App\Models\Applicant;
use App\Models\Confirm;
use App\Models\Registration;
use Brainstud\FileVault\Facades\FileVault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard() {
      $users = Applicant::all('id')->count();
      $applicants = Registration::all('applicant_id')->count();
      $answers = Answer::all('applicant_id')->count();

      $chart['applicants'] = [];
      $chart['answers'] = [];
      $chart['education_level'] = [];

      foreach (Registration::groupBy('subcamp')->selectRaw('subcamp, count(applicant_id) as total')->get() as $row) {
        $chart['applicants'][$row['subcamp']] = $row['total'];
      }

      foreach (Answer::groupBy('subcamp')->selectRaw('subcamp, count(applicant_id) as total')->get() as $row) {
        $chart['answers'][$row['subcamp']] = $row['total'];
      }

      foreach (Registration::select('education_level', DB::raw('count(education_level) as total'))->groupBy('education_level')->get() as $row) {
        $chart['education_level'][$row['education_level']] = $row['total'];
      }

      foreach (Registration::select('gender', DB::raw('count(gender) as total'))->groupBy('gender')->get() as $row) {
        $chart['gender'][$row['gender']] = $row['total'];
      }

      return view('admin.dashboard', [
        'users'=>$users,
        'applicants'=>$applicants,
        'answers'=>$answers,
        'chart'=>$chart,
      ]);
    }

    public function registrations() {
      return view('admin.registrations');
    }

    public function applicantDetails($applicant_id) {
      $applicant = [
        'registration' => Registration::find($applicant_id),
        'answer' => Answer::find($applicant_id)
      ];

      if (is_null($applicant['registration'])) {
        return abort(404);
      }

      $camp_quizzes = [
          [
            'question' => 'ถ้าน้องจะอธิบายนิสัยของตนเองด้วยคำสั้น ๆ จะใช้คำว่าอะไร เพราะอะไร (เช่น ร่าเริง, ขี้อาย, บ้าพลัง)',
            'answer' => null,
          ],
          [
            'question' => 'ถ้าคะแนนเต็ม 10 คะแนน น้อง ๆ จะให้คะแนนความอยากมาค่าย ITCAMP18 เท่าไหร่ เพราะเหตุใด',
            'answer' => null,
          ],
          [
            'question' => 'หากได้รับการคัดเลือกเข้าร่วมค่าย ITCAMP18 แล้วพบว่าไม่มีคนรู้จักในค่ายเลย ยังจะตัดสินใจเข้าร่วมหรือไม่ เพราะเหตุใด',
            'answer' => null,
          ],
          [
            'question' => 'ถ้าน้องได้ตื่นขึ้นมาในโลกที่เหนือจินตนาการ น้องคิดว่าโลกนั้นจะเป็นแบบไหน และจะทำอะไรเป็นอย่างแรกในโลกแห่งนั้น',
            'answer' => null,
          ],
      ];

      $webtopia_quizzes = [
          [
            'question' => 'UX / UI มีความแตกต่างกันอย่างไร ยกตัวอย่างของ UX ที่ดีและ UI ที่ดีของ Website มาอย่างละ 2 ข้อ',
            'answer' => null,
          ],
          [
            'question' => 'ถ้าหากให้พัฒนาเว็บไซต์ขึ้นมา 1 เว็บไซต์ที่เกี่ยวกับนโยบายของผู้ว่ากทม ฯ คนปัจจุบัน จะพัฒนาเว็บไซต์ที่จะสามารถสนับสนุนการใช้งานหรือติดตามนโยบายนั้น ๆ ได้เพราะเหตุใด จะใช้เทคโนโลยีใดบ้าง และมีประโยชน์อย่างไร (เลือกเพียง 1 นโยบาย โดยสามารถเป็นเว็บไซต์สำหรับคนทั่วไปหรือสำหรับทีมงานก็ได้)',
            'answer' => null,
          ],
          [
            'question' => 'จงเขียน flowchart การทำงานของ code นี้ รวมถึงผลลัพธ์ที่จะแสดงออกมา โดยสามารถเขียนลงใน <a class="underline text-blue-500 hover:text-blue-400" href="https://www.lucidchart.com/pages/examples/flowchart-maker">lucidchart</a> และแนบ URL มาได้',
            'answer' => null,
            'image' => 'webtopia_quiz_3.png',
          ],
          [
            'question' => 'จงเขียน function getSum ที่จะรับ array [“h3llo”, “w0rld”, “th1s”, “is”, “w3bt0pi4”] เข้ามาและ return ผลรวมของเลขโดดทั้งหมดที่แทรกอยู่ภายในคำแต่ละคำ เช่น “m0rn1n9” จะต้องเป็น 0+1+9 (ใช้ภาษา JavaScript เท่านั้น)',
            'answer' => null,
          ],
          [
            'question' => 'ให้น้อง ๆ เขียนเว็บไซต์เพื่อแนะนำตัว โดยจะมีเนื้อหาอย่างไรก็ได้ แต่ต้องมี HTML, CSS และ JavaScript ในไฟล์ .html ไฟล์เดียวเท่านั้น โดยมีการใช้ JavaScript ในการกระทำกับ DOM อย่างน้อย 2 อย่าง เช่นการ compute, element toggle และส่งโดยการอัปโหลดไฟล์บน google drive หรือ github แล้วแนบเป็น URL มา',
            'answer' => null,
          ],
      ];

      $datavergent_quizzes = [
          [
            'question' => 'อยากให้น้องลอง ยกตัวอย่างการประยุกต์ใช้ Data Science ในชีวิตจริงมาสัก 1 อย่าง ที่น้องคิดว่าอันนี้เเหละคือการทำ Data Science เเละลองอธิบายสิ่งนี้มาคร่าวๆ',
            'answer' => null,
          ],
          [
            'question' => 'น้องคิดเห็นอย่างไรกับคำเปรียบที่ว่า “Data is the new oil” หรือ “ข้อมูลเปรียบเสมือนน้ำมันที่มีมูลค่ามหาศาล”',
            'answer' => null,
          ],
          [
            'question' => 'จงอธิบาย Supervised Learning กับ Unsupervised Learning ตามความเข้าใจ',
            'answer' => null,
          ],
          [
            'question' => 'น้อง ๆ มีความคิดอย่างไรกับ กับประโยคที่ว่า “เรียนคณิตไปทำไม เรียนไปก็ไม่ได้ใช้ขนาดนั้น”',
            'answer' => null,
          ],
          [
            'question' => 'จากข้อมูลต่อไปนี้ น้องเห็นอะไรจากข้อมูลนี้บ้าง ลองอธิบายให้พี่ฟังหน่อย',
            'answer' => null,
            'image' => 'datavergent_quiz_5.JPG',
          ],
      ];

      $game_runner_quizzes = [
          [
            'question' => 'ถ้าน้องได้มีโอกาสทำงานในอุตสาหกรรมเกม น้องจะทำงานตำแหน่งอะไร เพราะอะไร<br>
            &emsp;A. Developer (ผู้พัฒนาเกม เขียนโปรแกรมเพื่อรันเกม)<br>
            &emsp;B. Designer (ผู้ออกแบบเกม เช่นเกมต้องเป็นแบบไหนถึงจะสนุก)<br>
            &emsp;C. Artist (ผู้สร้างผลงานอาร์ตให้เกม)',
            'answer' => null,
          ],
          [
            'question' => 'น้อง ๆ คิดว่า ในการสร้างเกมขึ้นมา 1 เกม ต้องมีองค์ประกอบอะไรบ้าง ลองอธิบายตามตามเข้าใจของตัวเอง',
            'answer' => null,
          ],
          [
            'question' => 'น้องคิดว่าเกมจะสนุกได้ ขึ้นอยู่กับอะไรบ้าง',
            'answer' => null,
          ],
          [
            'question' => 'เล่าถึงเกมในฝันให้พี่ฟังหน่อย',
            'answer' => null,
          ],
          [
            'question' => 'ลองอธิบาย game design ของเกมอะไรก็ได้มา 1 เกม อย่างละเอียด',
            'answer' => null,
          ],
      ];

      $nettapunk_quizzes = [
          [
            'question' => 'น้อง ๆ คิดว่าคอมพิวเตอร์ 2 เครื่องสามารถติดต่อสื่อสารกันได้อย่างไร',
            'answer' => null,
          ],
          [
            'question' => 'Network ในความคิดของน้อง ๆ คืออะไรและมีความสำคัญอย่างไร',
            'answer' => null,
          ],
          [
            'question' => 'อยากให้น้อง ๆ ยกตัวอย่างอุปกรณ์ที่เกี่ยวกับ Network ที่อยู่รอบ ๆ ตัวของน้องพร้อมอธิบายให้พวกพี่ฟังหน่อยว่าทำไมถึงเลือกอุปกรณ์นี้มาและมันทำอะไรได้บ้าง',
            'answer' => null,
          ],
          [
            'question' => 'หากน้องเปรียบเทียบ Network เป็นอะไรก็ได้ 1 อย่าง น้องๆจะเปรียบเทียบกับอะไร และเพราะอะไร',
            'answer' => null,
          ],
          [
            'question' => 'น้อง ๆ คิดว่า Internet Protocol หรือที่เรียกย่อ ๆ ว่า IP คืออะไร และความแตกต่างระหว่าง IPv4 และ IPv6 มีความแตกต่างกันอย่างไร และทำไมถึงต้องมี IPv6',
            'answer' => null,
          ],
      ];

      switch ($applicant['registration']->subcamp) {
        case 'Webtopia':
          $subcamp_quizzes = $webtopia_quizzes;
          break;
        case 'DataVergent':
          $subcamp_quizzes = $datavergent_quizzes;
          break;
        case 'Game Runner':
          $subcamp_quizzes = $game_runner_quizzes;
          break;
        case 'Nettapunk':
          $subcamp_quizzes = $nettapunk_quizzes;
          break;
      }

      if ($applicant['answer']) {
          $camp_answer = (array) json_decode($applicant['answer']->camp_answer);
          $subcamp_answer = (array) json_decode($applicant['answer']->subcamp_answer);

          $camp_quizzes = array_map(function ($answer, $quiz) {
              $res = ['question' => $quiz['question'],'answer' => $answer,];
              if (isset($quiz['image'])) {$res['image'] = $quiz['image'];}
              return $res;
          }, $camp_answer, $camp_quizzes);

          $subcamp_quizzes = array_map(function ($answer, $quiz) {
              $res = ['question' => $quiz['question'],'answer' => $answer,];
              if (isset($quiz['image'])) {$res['image'] = $quiz['image'];}
              return $res;
          }, $subcamp_answer, $subcamp_quizzes);
      }

      $applicant['answer']['camp'] = $camp_quizzes;
      $applicant['answer']['subcamp'] = $subcamp_quizzes;

      return view('admin.registrations-details', ['applicant'=>$applicant]);
    }

    public function export($subcamp) {
      if (in_array($subcamp, ['Webtopia','DataVergent','Game Runner','Nettapunk'])) {
        return Excel::download(new WebtopiaExport($subcamp), "ITCAMP18_{$subcamp}.xlsx");
      } elseif ($subcamp == 'confirmations') {
        date_default_timezone_set("Asia/Bangkok");
        return Excel::download(new ConfirmationList(), "itcamp18_confirmation_list_".date('YmdHis').".xlsx");
      }
    }

    public function signin() {
      return view('admin.signin');
    }

    public function signout() {
      Auth::guard('admin')->logout();
      return redirect()->route('admin.signout');
    }

    public function document($doc_type, $applicant_id) {

      $accept_doce_type = [
        'identity-card',
        'transfer-statement',
        'vaccine-certificate',
      ];

      if (Confirm::find($applicant_id) === null || !in_array($doc_type, $accept_doce_type) || Confirm::find($applicant_id)->confirm == 0) {
        return abort(404);
      }

      $get_filename = Confirm::find($applicant_id)->{str_replace('-', '_', $doc_type)};

      $contentType = [
        'png' => 'image/png',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'jpe' => 'image/jpeg',
      ];

      $ext = strtolower(pathinfo(substr("{$doc_type}/{$get_filename}", 0, -4), PATHINFO_EXTENSION));

      /* If a user has the file, so decrypt and return it. */
      return response()->stream(function () use ($doc_type, $get_filename) {
        FileVault::streamDecrypt("{$doc_type}/{$get_filename}");
      }, 200, ["Content-Type" => $contentType[$ext]]);
    }
}
