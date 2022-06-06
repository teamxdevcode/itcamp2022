<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateQuestionForm extends Component
{
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

	public function selectPage($page)
	{
		$this->currentPage = $page;
	}

	public function render()
	{
		return view('livewire.create-question-form');
	}
}
