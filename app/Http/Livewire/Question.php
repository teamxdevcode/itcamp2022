<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Question extends Component
{
    public $step=1;
    public $subcamp;

    public $camp_quizzes = [
        [
          'question' => 'ถ้าน้องจะอธิบายนิสัยของตนเองด้วยคำสั้นๆ จะใช้คำว่าอะไร เพราะอะไร? (เช่น ร่าเริง, ขี้อาย, บ้าพลัง)',
          'answer' => null,
        ],
        [
          'question' => 'ถ้าคะแนนเต็ม 10 คะแนน น้องๆจะให้คะแนนความอยากมาค่าย IT camp 18 เท่าไหร่ เพราะเหตุใด',
          'answer' => null,
        ],
        [
          'question' => 'หากได้รับการคัดเลือกเข้าร่วม ค่าย IT camp 18 แล้วพบว่าไม่มีคนรู้จักในค่ายเลย ยังจะตัดสินใจเข้าร่วมหรือไม่ เพราะเหตุใด',
          'answer' => null,
        ],
        [
          'question' => 'ถ้าน้องได้ตื่นขึ้นมาในโลกที่เหนือจินตนาการ น้องคิดว่าโลกนั้นจะเป็นแบบไหน และจะทำอะไรเป็นอย่างแรกในโลกแห่งนั้น?',
          'answer' => null,
        ],
    ];

    public $webtopia_quizzes = [
        [
          'question' => 'UX / UI มีความแตกต่างกันอย่างไร ยกตัวอย่างของ UX ที่ดีและ UI ที่ดีของ Website มาอย่างละ 2 ข้อ (ให้น้อง ๆ คิดเพื่อหาข้อดี-ข้อเสีย และสามารถนำความรู้มาประยุกต์หรือในค่าย)',
          'answer' => null,
        ],
        [
          'question' => 'ถ้าหากให้พัฒนาเว็บไซต์ขึ้นมา 1 เว็บไซต์ที่เกี่ยวกับนโยบายของผู้ว่ากทม ฯ คนปัจจุบัน จะพัฒนาเว็บไซต์ที่จะสามารถสนับสนุนการใช้งานหรือติดตามนโยบายนั้น ๆ ได้เพราะเหตุใด จะใช้เทคโนโลยีใดบ้าง และมีประโยชน์อย่างไร (เลือกเพียง 1 นโยบาย โดยสามารถเป็นเว็บไซต์สำหรับคนทั่วไปหรือสำหรับทีมงานก็ได้) (ดูความคิดสร้างสรรค์ และกระบวนการคิด)',
          'answer' => null,
        ],
        [
          'question' => 'จงเขียน flowchart การทำงานของ code นี้ รวมถึงผลลัพธ์ที่จะแสดงออกมา โดยสามารถเขียนลงใน lucidchart และแนบ URL มาได้ (ดูกระบวนการคิด และพื้นฐานความรู้ของน้องในเรื่อง javascript)',
          'answer' => null,
          'image' => 'webtopia_quiz_3.png',
        ],
        [
          'question' => 'จงเขียน function getSum ที่จะรับ array [“h3llo”, “w0rld”, “th1s”, “is”, “w3bt0pi4”] เข้ามาและ return ผลรวมของเลขโดดทั้งหมดที่แทรกอยู่ภายในคำแต่ละคำ เช่น “m0rn1n9” จะต้องเป็น 0+1+9 (ดูพื้นฐานความรู้ และกระบวนการคิดของน้องในเรื่อง javascript)',
          'answer' => null,
        ],
        [
          'question' => 'ให้น้อง ๆ เขียนเว็บไซต์เพื่อแนะนำตัว โดยจะมีเนื้อหาอย่างไรก็ได้ แต่ต้องมี HTML, CSS และ JavaScript ในไฟล์ .html ไฟล์เดียวเท่านั้น โดยมีการใช้ JavaScript ในการกระทำกับ DOM อย่างน้อย 2 อย่าง เช่นการ compute, element toggle และส่งโดยการอัปโหลดไฟล์บน google drive หรือ github แล้วแนบเป็น URL มา',
          'answer' => null,
        ],
    ];

    public $datavergent_quizzes = [
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
          'question' => 'จากข้อมูลต่อไปนี้ หากน้อง ๆ ต้องการแบ่งคนออกเป็นกลุ่ม ๆ น้อง ๆ จะแบ่งเป็นกี่กลุ่ม เป็นกลุ่มอะไรบ้าง และแบ่งอย่างไร จงอธิบายเหตุผล',
          'answer' => null,
          'image' => 'datavergent_quiz_5.JPG',
        ],
    ];

    public $game_runner_quizzes = [
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

    public $nettapunk_quizzes = [
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

    public $subcamp_quizzes = [];

    public $rules = [
      'camp_quizzes.*.answer' => 'required',
      'subcamp_quizzes.*.answer' => 'required',
    ];

    public function mount() {
        $this->subcamp = Auth::user()->registration->subcamp;

        switch ($this->subcamp) {
          case 'Webtopia':
            $this->subcamp_quizzes = $this->webtopia_quizzes;
            break;
          case 'DataVergent':
            $this->subcamp_quizzes = $this->datavergent_quizzes;
            break;
          case 'Game Runner':
            $this->subcamp_quizzes = $this->game_runner_quizzes;
            break;
          case 'Nettapunk':
            $this->subcamp_quizzes = $this->nettapunk_quizzes;
            break;
        }

        if (Auth::user()->answer) {
            $camp_answer = (array) json_decode(Auth::user()->answer->camp_answer);
            $subcamp_answer = (array) json_decode(Auth::user()->answer->subcamp_answer);

            $this->camp_quizzes = array_map(function ($answer, $quiz) {
                $res = ['question' => $quiz['question'],'answer' => $answer,];
                if (isset($quiz['image'])) {$res['image'] = $quiz['image'];}
                return $res;
            }, $camp_answer, $this->camp_quizzes);

            $this->subcamp_quizzes = array_map(function ($answer, $quiz) {
                $res = ['question' => $quiz['question'],'answer' => $answer,];
                if (isset($quiz['image'])) {$res['image'] = $quiz['image'];}
                return $res;
            }, $subcamp_answer, $this->subcamp_quizzes);
        }
    }

    public function increment() {
        if ($this->step < 2) {
            $this->step++;
        }
    }

    public function decrement() {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function submit() {
        $this->validate();

        Auth::user()->answer()->updateOrCreate(
            ['applicant_id' => Auth::id()],
            [
                'subcamp' => $this->subcamp,
                'camp_answer' => json_encode(array_map(function ($array) {return $array['answer'];}, $this->camp_quizzes)),
                'subcamp_answer' => json_encode(array_map(function ($array) {return $array['answer'];}, $this->subcamp_quizzes)),
            ]
        );

        return $this->step = 3;
    }

    public function render()
    {
        return view('livewire.question');
    }
}
