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

	protected $rules = [
	  'formData.*' => 'required',
	  'formData.birth' => 'required|date',
	  'formData.phone' => 'required|digits:10',
	  'formData.email' => 'required|email',
	  'formData.education_certificate' => '',
	  'formData.congenital_disease_detail' => '',
	  'formData.allergic_detail' => '',
	  'formData.emergency_contact_phone' => 'required|digits:10',
    'education_certificate' => 'required|image|max:2048',
	];

	protected $validationAttributes = [
		'formData.name' => 'ชื่อจริง',
		'formData.surname' => 'นามสกุล',
		'formData.nickname' => 'ชื่อเล่น',
		'formData.birth' => 'วันเกิด',
		'formData.blood_type' => 'หมู่เลือด',
		'formData.religion' => 'ศาสนา',
		'formData.address' => 'ที่อยู่ปัจจุบัน',
		'formData.province' => 'จังหวัดที่อยู่ปัจจุบัน',
		'formData.district' => 'อำเภอ/เขตที่อยู่ปัจจุบัน',
		'formData.subdistrict' => 'ตำบล/แขวงที่อยู่ปัจจุบัน',
		'formData.phone' => 'เบอร์โทรศัพท์',
		'formData.email' => 'อีเมล',
		'formData.education_level' => 'ระดับการศึกษาปัจจุบัน',
		'formData.school' => 'โรงเรียน/สถานศึกษาปัจจุบัน',
		'formData.education_program' => 'แผนการเรียน/สาขาปัจจุบัน',
		'formData.education_certificate' => 'ใบรับรองผลการศึกษา (ปพ.7) ',
		'education_certificate' => 'ใบรับรองผลการศึกษา (ปพ.7) ',
		'formData.has_congenital_disease' => 'โรคประจำตัว',
		'formData.congenital_disease_detail' => 'รายละเอียดโรคประจำตัว',
		'formData.has_allergic' => 'สิ่งที่แพ้/อาหารที่แพ้',
		'formData.allergic_detail' => 'รายละเอียดสิ่งที่แพ้/อาหารที่แพ้',
		'formData.shirt_size' => 'ไซส์เสื้อ',
		'formData.activities_detail' => 'กิจกรรมที่เข้าร่วมหรือผลงานที่เคยทำ หรือผลงานที่อยากนำเสนอ',
		'formData.emergency_contact_name' => 'ชื่อจริงของผู้ติดต่อฉุกเฉินหรือผู้ปกครอง',
		'formData.emergency_contact_surname' => 'นามสกุลของผู้ติดต่อฉุกเฉินหรือผู้ปกครอง',
		'formData.emergency_contact_phone' => 'เบอร์โทรศัพท์ของผู้ติดต่อฉุกเฉินหรือผู้ปกครอง',
		'formData.emergency_contact_relationship' => 'ความเกี่ยวข้องของผู้ติดต่อฉุกเฉินหรือผู้ปกครอง',
	];

  public $photo_validation = false;
  public $education_certificate;

  public function updated($propertyName)
  {
    if($propertyName === 'education_certificate') {
      $this->photo_validation = false;
      $this->validateOnly($propertyName);
      $this->photo_validation = true;
    } else {
      $this->rules['formData.congenital_disease_detail'] = '';
      $this->rules['formData.allergic_detail'] = '';

      if ($this->formData['has_congenital_disease']) {
        $this->rules['formData.congenital_disease_detail'] = 'required';
      }

      if ($this->formData['has_allergic']) {
        $this->rules['formData.allergic_detail'] = 'required';
      }

      $this->validateOnly($propertyName);
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
    $this->rules['formData.congenital_disease_detail'] = '';
    $this->rules['formData.allergic_detail'] = '';

    if ($this->formData['has_congenital_disease']) {
      $this->rules['formData.congenital_disease_detail'] = 'required';
    }

    if ($this->formData['has_allergic']) {
      $this->rules['formData.allergic_detail'] = 'required';
    }

    $validatedData = $this->validate();

    try {
      // Insert registration to a database.
      $Registration = Registration::create($this->formData);

      // Store and encrypt an education certificate file.
      $this->education_certificate->storeAs('education_certificates', $this->education_certificate->hashName());
      FileVault::encrypt('education_certificates/'.$this->education_certificate->hashName());
      $this->formData['education_certificate'] = $this->education_certificate->hashName().'.enc';

      return redirect()->route('home');
    } catch(Throwable $e) {
      $this->addError('Registration failed', $e->getMessage());

      // Delete an education certificates file from server if have any errors.
      Storage::delete('education_certificates/'.$this->education_certificate->hashName().'.enc');
    }

  }

	public function render()
	{
		return view('livewire.create-user-form');
	}
}
