<?php

namespace App\Http\Livewire;

use App\Models\Registration;
use Brainstud\FileVault\Facades\FileVault;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Throwable;

class CreateUserForm extends Component
{
  use WithFileUploads;

	public $currentPage = 1;

	public $pages = [
		1 => [
			'heading' => 'ข้อมูลส่วนตัว',
		],
		2 => [
			'heading' => 'ข้อมูลส่วนตัวเพิ่มเติม',
		],
		3 => [
			'heading' => 'ข้อมูลการศึกษา',
		],
		4 => [
			'heading' => 'ข้อมูลเพิ่มเติม',
		],
		5 => [
			'heading' => 'ข้อมูลเพิ่มเติม',
		]
	];

  public $formData = [
      'name' => null,
      'surname' => null,
      'nickname' => null,
      'birth' => null,
      'gender' => null,
      'blood_type' => null,
      'religion' => null,
      'address' => null,
      'province' => null,
      'district' => null,
      'subdistrict' => null,
      'phone' => null,
      'email' => null,
      'education_level' => null,
      'school' => null,
      'education_program' => null,
      'education_certificate' => null,
      'has_congenital_disease' => '0',
      'congenital_disease_detail' => '',
      'has_allergic' => '0',
      'allergic_detail' => '',
      'shirt_size' => null,
      'activities_detail' => null,
      'emergency_contact_name' => null,
      'emergency_contact_surname' => null,
      'emergency_contact_phone' => null,
      'emergency_contact_relationship' => null,
    ];

  protected $messages = [
    'formData.name.required' => 'กรุณาระบุชื่อ',
    'formData.surname.required' => 'กรุณาระบุนามสกุล',
    'formData.nickname.required' => 'กรุณาระบุชื่อเล่น',
    'formData.birth.required' => 'กรุณาระบุวันเกิด',
    'formData.gender.required' => 'กรุณาระบุเพศ',
    'formData.blood_type.required' => 'กรุณาระบุกรุ๊ปเลือด',
    'formData.religion.required' => 'กรุณาระบุศาสนา',
    'formData.address.required' => 'กรุณาระบุที่อยู่ปัจจุบัน',
    'formData.province.required' => 'กรุณาระบุจังหวัดที่อยู่ปัจจุบัน',
    'formData.district.required' => 'กรุณาระบุอำเภอ/เขตที่อยู่ปัจจุบัน',
    'formData.subdistrict.required' => 'กรุณาระบุตำบล/แขวงที่อยู่ปัจจุบัน',
    'formData.phone.required' => 'กรุณาระบุเบอร์โทรศัพท์ของคุณ',
    'formData.email.required' => 'กรุณาระบุอีเมลของคุณ',
    'formData.education_level.required' => 'กรุณาระบุระดับการศึกษาปัจจุบัน',
    'formData.school.required' => 'กรุณาระบุโรงเรียน/สถานศึกษาปัจจุบัน',
    'formData.education_program.required' => 'กรุณาระบุแผนการเรียน/สาขา',
    'education_certificate.required' => 'กรุณาอัพโหลดเอกสาร ปพ. 7',
    'formData.has_congenital_disease.required' => 'กรุณาระบุโรคประจำตัว',
    'formData.congenital_disease_detail.required' => 'กรุณาระบุรายละเอียดโรค',
    'formData.has_allergic.required' => 'กรุณาระบุสิ่งที่แพ้/อาหารที่แพ้',
    'formData.allergic_detail.required' => 'กรุณาระบุสิ่งที่แพ้',
    'formData.shirt_size.required' => 'กรุณาระบุไซส์เสื้อ',
    'formData.activities_detail.required' => 'กรุณาระบุกิจกรรมที่เข้าร่วมหรือผลงานที่เคยทำ หรือผลงานที่อยากนำเสนอ',
    'formData.emergency_contact_name.required' => 'กรุณาระบุชื่อจริงของผู้ปกครอง',
    'formData.emergency_contact_surname.required' => 'กรุณาระบุนามสกุลของผู้ปกครอง',
    'formData.emergency_contact_phone.required' => 'กรุณาระบุเบอร์โทรศัพท์ของผู้ปกครอง',
    'formData.emergency_contact_relationship.required' => 'กรุณาระบุความเกี่ยวข้องกับผู้ปกครอง',
  ];

  public $photo_validation = false;
  public $education_certificate;

  public function updated($propertyName)
  {
    if($propertyName === 'education_certificate') {
      $this->photo_validation = false;
      $this->validateOnly($propertyName, [
        'education_certificate' => 'required|image|max:2048',
      ]);
      $this->photo_validation = true;
    } else {
      $validate = [
        'formData.*' => 'required',
        'formData.birth' => 'required|date',
        'formData.phone' => 'required|digits:10',
        'formData.email' => 'required|email',
        'formData.education_certificate' => '',
        'formData.congenital_disease_detail' => '',
        'formData.allergic_detail' => '',
        'formData.emergency_contact_phone' => 'required|digits:10',
      ];

      if ($this->formData['has_congenital_disease']) {
        $validate['formData.congenital_disease_detail'] = 'required';
      }

      if ($this->formData['has_allergic']) {
        $validate['formData.allergic_detail'] = 'required';
      }

      $this->validateOnly($propertyName, $validate);
    }
  }

	public function selectPage($page)
	{
		$this->currentPage = $page;
	}

  public function nextPage() {
    $this->currentPage++;
  }

  public function previousPage() {
    $this->currentPage--;
  }

  public function save() {
    $validate = [
      'formData.*' => 'required',
      'formData.birth' => 'required|date',
      'formData.phone' => 'required|digits:10',
      'formData.email' => 'required|email',
      'formData.education_certificate' => '',
      'formData.congenital_disease_detail' => '',
      'formData.allergic_detail' => '',
      'formData.emergency_contact_phone' => 'required|digits:10',
    ];

    if ($this->formData['has_congenital_disease']) {
      $validate['formData.congenital_disease_detail'] = 'required';
    }

    if ($this->formData['has_allergic']) {
      $validate['formData.allergic_detail'] = 'required';
    }
    $validatedData = $this->validate($validate);

    $this->education_certificate->storeAs('education_certificates', $this->education_certificate->hashName());

    FileVault::encrypt('education_certificates/'.$this->education_certificate->hashName());

    $this->formData['education_certificate'] = $this->education_certificate->hashName().'.enc';

    try {
      $Registration = Registration::create($this->formData);
      return redirect()->route('home');
    } catch(Throwable $e) {
      $this->addError('Registration failed', $e->getMessage());
      Storage::delete('education_certificates/'.$this->education_certificate->hashName().'.enc');
    }

  }

	public function render()
	{
		return view('livewire.create-user-form');
	}
}
