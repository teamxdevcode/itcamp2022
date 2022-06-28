<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class WebtopiaExport implements FromCollection, WithMapping
{
    private $subcamp;
    public function __construct($subcamp)
    {
      $this->subcamp = $subcamp;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('registrations')
        ->leftJoin('answers', 'registrations.applicant_id', '=', 'answers.applicant_id')
        ->where('registrations.subcamp', $this->subcamp)
        ->get();
    }

    public function map($invoice): array
    {
        $res = [];
        foreach ($invoice as $key => $value) {
          if ($key === 'camp_answer') {
            if ($value !== null) {
              $answers = json_decode($value, true);
              foreach($answers as $answer) {
                $res[] = $answer;
              }
            }
            continue;
          }
          if ($key === 'subcamp_answer') {
            if ($value !== null) {
              $answers = json_decode($value, true);
              foreach($answers as $answer) {
                $res[] = $answer;
              }
            }
            continue;
          }
          $res[] = $value;
        }
        return $res;
    }
}
