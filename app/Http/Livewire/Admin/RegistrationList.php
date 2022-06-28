<?php

namespace App\Http\Livewire\Admin;

use App\Models\Registration;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Action;

class RegistrationList extends LivewireDatatable
{

    public function builder()
    {
        return Registration::query();
    }

    public function columns()
    {
        return [
          Column::checkbox('registrations.applicant_id'),
          Column::callback(['registrations.result'], function ($result) {
            if ($result == 1) {
              return "<span class=\"block flex justify-center items-center gap-1 text-green-600 \"><span class=\"material-symbols-outlined\">task_alt</span>Passed</span>";
            } elseif ($result == 0) {
              return "<span class=\"block flex justify-center items-center gap-1 text-red-600 \"><span class=\"material-symbols-outlined\">cancel</span>Not Passed</span>";
            } elseif ($result == 2) {
              return "<span class=\"block flex justify-center items-center gap-1 text-gray-400 \"><span class=\"material-symbols-outlined\">pending</span>Reservd</span>";
            }
          })->label('Result')->unsortable(),
          Column::name('registrations.applicant_id')->sortBy('registrations.applicant_id')->defaultSort('asc')->searchable(),
          Column::name('name')->unsortable()->searchable(),
          Column::name('surname')->unsortable()->searchable(),
          Column::callback(['subcamp'], function ($subcamp) {
            $subcamp_image = [
              'Webtopia' => [1,'from-red-600'],
              'DataVergent' => [2, 'from-amber-600'],
              'Game Runner' => [3, 'from-green-600'],
              'Nettapunk' => [4, 'from-blue-600'],
            ];
            return "<span class=\"text-center flex items-center gap-2\"><img src=\"https://itcamp18.in.th/camp-logo-{$subcamp_image[$subcamp][0]}.png\" alt=\"{$subcamp}\" class=\"h-6\"> {$subcamp}</span>";
          })->label('Subcamp')->searchable()->sortBy('registrations.subcamp')->filterable(['Webtopia','DataVergent','Game Runner','Nettapunk']),
          Column::name('created_at')->sortBy('registrations.created_at'),
          Column::callback(['answer.applicant_id'], function ($applicant_id) {
            return "<span class=\"text-center block\">".(empty($applicant_id) ? 'Not submit':'Submitted')."</span>";
          })->sortBy('answers.applicant_id')->label('Answer status'),
          Column::callback(['applicant_id'], function ($applicant_id) {
            return view('admin.registration-table-action', ['applicant_id' => $applicant_id]);
          })->unsortable(),
        ];
    }
    public function buildActions()
    {
        return [
            Action::value('passed')->label('Set to passed')->callback(function ($mode, $items) {
                foreach ($items as $id) {
                  Registration::where('applicant_id', $id)->update(['result' => 1]);
                }
            }),
            Action::value('not passed')->label('Set to not passed')->callback(function ($mode, $items) {
                foreach ($items as $id) {
                  Registration::where('applicant_id', $id)->update(['result' => 0]);
                }
            }),
            Action::value('reserved')->label('Set to reserved')->callback(function ($mode, $items) {
                foreach ($items as $id) {
                  Registration::where('applicant_id', $id)->update(['result' => 2]);
                }
            }),
        ];
    }
}
