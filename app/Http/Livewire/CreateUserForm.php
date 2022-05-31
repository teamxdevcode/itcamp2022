<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateUserForm extends Component
{

	public $currentPage = 1;

	public $pages = [
		1 => [
			'heading' => 'ข้อมูลส่วนตัว',
		],
		2 => [
			'heading' => 'ข้อมูลการศึกษา',
		],
		3 => [
			'heading' => 'ข้อมูลเพิ่มเติม',
		]
	];

	public function selectPage($page)
	{
		$this->currentPage = $page;
	}

	public function render()
	{
		return view('livewire.create-user-form');
	}
}
