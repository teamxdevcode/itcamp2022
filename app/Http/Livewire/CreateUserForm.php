<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;

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
    1 => [
      'name' => null,
      'surname' => null,
      'nickname' => null,
      'birth' => null,
      'gender' => null,
      'blood_type' => null,
      'religion' => null,
    ],
    2 => [
      'address' => null,
      'province' => null,
      'district' => null,
      'subdistrict' => null,
      'phone' => null,
      'email' => null,
    ],
    3 => [
      'education_level' => null,
      'school' => null,
      'program' => null,
      'certificate7' => null,
    ],
    4 => [
      'congenital_disease' => [
        'has' => null,
        'detail' => null,
      ],
      'allergic' => [
        'has' => null,
        'detail' => null,
      ],
      'shirt_size' => null,
    ],
    5 => [
      'question' => null,
      'emergency_contact'=> [
        'name' => null,
        'surname' => null,
        'phone' => null,
        'relationship' => null,
      ]
    ]
  ];

  // protected $rules = [
  //   'formData.1.name' => 'required',
  //   'formData.1.surname' => 'required',
  //   'formData.1.nickname' => 'required',
  //   'formData.1.birth' => 'required',
  //   'formData.1.gender' => 'required',
  //   'formData.1.blood_type' => 'required',
  //   'formData.1.religion' => 'required',
  //   'formData.2.address' => 'required',
  //   'formData.2.province' => 'required',
  //   'formData.2.district' => 'required',
  //   'formData.2.subdistrict' => 'required',
  //   'formData.2.phone' => 'required',
  //   'formData.2.email' => 'required',
  //   'formData.3.education_level' => 'required',
  //   'formData.3.school' => 'required',
  //   'formData.3.program' => 'required',
  //   'formData.3.certificate7' => 'required',
  //   'formData.4.congenital_disease.has' => 'required',
  //   'formData.4.congenital_disease.detail' => 'required',
  //   'formData.4.allergic.has' => 'required',
  //   'formData.4.allergic.detail' => 'required',
  //   'formData.4.shirt_size' => 'required',
  //   'formData.5.question' => 'required',
  //   'formData.5.emergency_contact.name' => 'required',
  //   'formData.5.emergency_contact.surname' => 'required',
  //   'formData.5.emergency_contact.phone' => 'required',
  //   'formData.5.emergency_contact.relationship' => 'required',
  // ];

  protected $rules = [
    'formData.*.*' => 'required',
    'formData.*.*.*' => 'required',
    'formData.1.birth' => 'required|date',
    'formData.2.phone' => 'required|digits:10',
    'formData.2.email' => 'required|email',
    'formData.3.certificate7' => 'required|image|max:2048',
    'formData.4.congenital_disease.detail' => '',
    'formData.4.allergic.detail' => '',
    'formData.5.question' => '',
    'formData.5.emergency_contact.phone' => 'required|digits:10',
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
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
    // $validatedData = $this->validate();
    // try {
    //   $validatedData = $this->validate();
    // } catch(\Illuminate\Validation\ValidationException $e) {
    //   return dd( $e->validator->errors());
    // }
    return dd($this->formData);
  }

	public function render()
	{
		return view('livewire.create-user-form');
	}
}
