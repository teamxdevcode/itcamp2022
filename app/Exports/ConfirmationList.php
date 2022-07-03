<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ConfirmationList implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return DB::table('confirms')
      ->leftJoin('registrations', 'confirms.applicant_id', 'registrations.applicant_id')
      ->orderBy('confirm')
      ->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'State',
            'Name',
            'Surname',
            'Nickname',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }

    public function map($list): array
    {
      return [
          $list->applicant_id,
          ($list->confirm == 0) ? 'สละสิทธิ์' : 'ยืนยันสิทธิ์',
          $list->name,
          $list->surname,
          $list->nickname ?? '-',
      ];
    }
}
