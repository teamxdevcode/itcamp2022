<?php

namespace App\Http\Livewire\Admin;

use App\Models\Confirm;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class ConfirmationTable extends LivewireDatatable
{
    public function builder()
    {
        return Confirm::query();
    }

    public function columns()
    {
      return [
        Column::name('confirms.applicant_id')->searchable()->sortBy('confirms.applicant_id'),
        Column::callback('confirms.confirm', function($state) {
          return $state == 1 ? '<span class="material-symbols-outlined text-green-600 flex justify-center items-center">task_alt</span>' : '<span class="text-red-600 flex justify-center items-center">สละสิทธิ์</span>';
        })->sortBy('confirms.confirm')->label('State'),
        Column::name('confirms.nickname')->searchable()->sortBy('confirms.nickname'),
        Column::name('registration.name')->searchable()->sortBy('registrations.name'),
        Column::name('registration.surname')->searchable()->sortBy('registrations.surname'),
        Column::callback('confirms.transfer_at', function($date) {
          return $date ?? $date;
        })->sortBy('confirms.transfer_at')->label('Transfer at'),
        Column::callback('confirms.food_restrictions', function($list) {
          return implode(', ', (array)json_decode($list));
        })->unsortable()->label('Food restrictions'),
        Column::callback('registration.result', function($result) {
          return $result == 2 ? 'Substitute' : '';
        })->sortBy('registrations.result')->label('Note'),
        Column::callback(['confirms.applicant_id', 'confirms.confirm'], function($id, $state) {
          return $state == 1 ? view('livewire.datatables.actions.confirmation-table', ['applicant_id'=>$id]) : '';
        })->unsortable(),
      ];
    }
}
