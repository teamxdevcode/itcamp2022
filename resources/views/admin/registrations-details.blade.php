@extends('admin.layouts.app')
@section('title', 'Applicant Details')
@section('main')
@php
  $subcamp_image = [
    'Webtopia' => [1,'from-red-600'],
    'DataVergent' => [2, 'from-amber-600'],
    'Game Runner' => [3, 'from-green-600'],
    'Nettapunk' => [4, 'from-blue-600'],
  ];
  $level = [
    'M.4' => 'มัธยมศึกษาปีที่ 4',
    'M.5' => 'มัธยมศึกษาปีที่ 5',
    'M.6' => 'มัธยมศึกษาปีที่ 6',
    'HVC.' => 'ประกาศนียบัตรวิชาชีพ (ปวช.)',
  ];
  $gender = [
    'Male' => 'ชาย',
    'Female' => 'หญิง',
    'LGBTQ+' => 'เพศทางเลือก (LGBTQ+)',
  ];
  $religion = [
    'Buddhism' => 'พุทธ',
    'Christianity' => 'คริสต์',
    'Islam' => 'อิสลาม',
    'Other' => 'อื่น ๆ',
  ];
  $th_months = [
    "มกราคม",
    "กุมภาพันธ์",
    "มีนาคม",
    "เมษายน",
    "พฤษภาคม",
    "มิถุนายน",
    "กรกฎาคม",
    "สิงหาคม",
    "กันยายน",
    "ตุลาคม",
    "พฤศจิกายน",
    "ธันวาคม"
  ];
  $birthday = date_create($applicant['registration']->birthday);

  function phone($number) {
    if (is_numeric($number) && strlen($number) >= 9) {
      return substr($number, 0, 3).'-'.substr($number, 3, 3).'-'.substr($number, 6);
    }
    return false;
  }
@endphp
<div class="cursor-default rounded-2xl mb-6 p-4 bg-gradient-to-r flex items-center gap-6 {{$subcamp_image[$applicant['registration']->subcamp][1]}} to-gray-800">
  <img src="https://itcamp18.in.th/camp-logo-{{$subcamp_image[$applicant['registration']->subcamp][0]}}.png" alt="{{$applicant['registration']->subcamp}}" class="h-28">
  <h1 class="text-white/75 font-bold text-2xl">{{$applicant['registration']->subcamp}} Town</h1>
</div>
<div class="grid grid-cols-1 gap-6">
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 h-fit">
    <h1 class="font-semibold mb-3">Registration Details</h1>

    <h2 class="my-3 text-sm">Personal Information</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>Name</th>
          <td>{{$applicant['registration']->name}}</td>
          <th>Surname</th>
          <td>{{$applicant['registration']->surname}}</td>
        </tr>
        <tr>
          <th>Birthday</th>
          <td>{{ date_format($birthday, 'd').' '.$th_months[date_format($birthday, 'm')-1].' '.(date_format($birthday, 'Y') > 2500 ? date_format($birthday, 'Y') : date_format($birthday, 'Y')+543) }}</td>
          <th>Gender</th>
          <td>{{ array_key_exists($applicant['registration']->gender, $gender) ? $gender[$applicant['registration']->gender] : $applicant['registration']->gender }}</td>
        </tr>
        <tr>
          <th>Religion</th>
          <td colspan="3">{{ array_key_exists($applicant['registration']->religion, $religion) ? $religion[$applicant['registration']->religion] : $applicant['registration']->religion }}</td>
        </tr>
      </table>
    </div>

    <h2 class="my-3 text-sm">Contact</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>Email</th>
          <td>{{$applicant['registration']->email}}</td>
          <th>Phone</th>
          <td>{{phone($applicant['registration']->phone)}}</td>
        </tr>
      </table>
    </div>

    <h2 class="my-3 text-sm">Address</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>Line</th>
          <td colspan="3">{{$applicant['registration']->address}}</td>
        </tr>
        <tr>
          <th>Sub-district</th>
          <td>{{$applicant['registration']->subdistrict}}</td>
          <th>District</th>
          <td>{{$applicant['registration']->district}}</td>
        </tr>
        <tr>
          <th>Province</th>
          <td>{{$applicant['registration']->province}}</td>
        </tr>
      </table>
    </div>

    <h2 class="my-3 text-sm">Educational Information</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>School</th>
          <td colspan="3">{{$applicant['registration']->school}}</td>
        </tr>
        <tr>
          <th>Program</th>
          <td colspan="3">{{$applicant['registration']->educational_program}}</td>
        </tr>
        <tr>
          <th>Level</th>
          <td>{{ array_key_exists($applicant['registration']->education_level, $level) ? $level[$applicant['registration']->education_level] : $applicant['registration']->education_level }}</td>
          <th>Certificate</th>
          <td></td>
        </tr>
      </table>
    </div>

    <h2 class="my-3 text-sm">Health Information</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>Congenital Disease</th>
          <td>{{$applicant['registration']->congenital_disease}}</td>
          <th>Allergic Drug</th>
          <td>{{$applicant['registration']->allergic_drug}}</td>
        </tr>
        <tr>
          <th>Allergen</th>
          <td>{{$applicant['registration']->allergen}}</td>
          <th>Blood Type</th>
          <td>{{$applicant['registration']->blood_type}}</td>
        </tr>
      </table>
    </div>

    <h2 class="my-3 text-sm">Emergency Contact</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>Name</th>
          <td>{{$applicant['registration']->emergency_name}}</td>
          <th>Surname</th>
          <td>{{$applicant['registration']->emergency_surname}}</td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>{{phone($applicant['registration']->emergency_phone)}}</td>
          <th>Relationship</th>
          <td>{{$applicant['registration']->emergency_relationship}}</td>
        </tr>
      </table>
    </div>

    <h2 class="my-3 text-sm">Other Information</h2>
    <div class="overflow-y-auto rounded-lg border border-gray-200">
      <table class="table-list">
        <tr>
          <th>Shirt Size</th>
          <td>{{$applicant['registration']->shirt_size}}</td>
          <th></th>
          <td></td>
        </tr>
      </table>
    </div>

  </div>

  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 h-fit">
    <h1 class="font-semibold mb-3">Camp Answer</h1>
    @foreach ($applicant['answer']['camp'] as $index => $quiz)
    <div class="mb-5">
      <p class="font-bold mb-1 text-gray-700 block">{{$index+1}}. {!!$quiz['question']!!}</p>
      <textarea readonly class="border border-gray-200 p-3 rounded-lg outline-none w-full" rows="4">{{$quiz['answer'] ?? 'ไม่พบคำตอบ'}}</textarea>
    </div>
    @endforeach
  </div>

  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 h-fit">
    <h1 class="font-semibold mb-3">Sub-Camp Answer</h1>
    @foreach ($applicant['answer']['subcamp'] as $index => $quiz)
    <div class="mb-5">
      <p class="font-bold mb-1 text-gray-700 block">{{$index+1}}. {!!$quiz['question']!!}</p>
      <textarea readonly class="border border-gray-200 p-3 rounded-lg outline-none w-full" rows="4">{{$quiz['answer'] ?? 'ไม่พบคำตอบ'}}</textarea>
    </div>
    @endforeach
  </div>
</div>
@endsection
