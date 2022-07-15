@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('main')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 relative hover:scale-[101%] hover:shadow-xl transition-all duration-300">
    <h1 class="font-bold text-xl">
      <span class="block font-semibold text-sm text-gray-500">All users</span>
      {{$users}}
    </h1>
    <div class="cursor-default absolute right-5 top-1/2 -translate-y-1/2 bg-gradient-to-br from-blue-600 to-purple-700 text-white h-12 w-12 flex items-center justify-center rounded-xl">
      <span class="material-symbols-outlined">person</span>
    </div>
  </div>
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 relative hover:scale-[101%] hover:shadow-xl transition-all duration-300">
    <h1 class="font-bold text-xl">
      <span class="block font-semibold text-sm text-gray-500">All applicants</span>
      {{$applicants}}
    </h1>
    <div class="cursor-default absolute right-5 top-1/2 -translate-y-1/2 bg-gradient-to-br from-blue-600 to-purple-700 text-white h-12 w-12 flex items-center justify-center rounded-xl">
      <span class="material-symbols-outlined">contact_page</span>
    </div>
  </div>
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 relative hover:scale-[101%] hover:shadow-xl transition-all duration-300">
    <h1 class="font-bold text-xl">
      <span class="block font-semibold text-sm text-gray-500">All submitted answers</span>
      {{$answers}}
    </h1>
    <div class="cursor-default absolute right-5 top-1/2 -translate-y-1/2 bg-gradient-to-br from-blue-600 to-purple-700 text-white h-12 w-12 flex items-center justify-center rounded-xl">
      <span class="material-symbols-outlined">edit_note</span>
    </div>
  </div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 h-fit">
    <h1 class="font-semibold">Applicants and Submitted answers</h1>
    <canvas id="applicantChart"></canvas>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 h-fit">
      <h1 class="font-semibold">Education Level</h1>
      <canvas id="educationLevelChart"></canvas>
    </div>
    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 h-fit">
      <h1 class="font-semibold">Gender</h1>
      <canvas id="GenderChart"></canvas>
    </div>
  </div>
</div>
<script>
  const labels = [
    'Webtopia',
    'DataVergent',
    'Game Runner',
    'Nettapunk',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Applicants',
      data: [
        {!!$chart['applicants']['Webtopia'] ?? '\'Webtopia\''!!},
        {!!$chart['applicants']['DataVergent'] ?? '\'DataVergent\''!!},
        {!!$chart['applicants']['Game Runner'] ?? '\'Game Runner\''!!},
        {!!$chart['applicants']['Nettapunk'] ?? '\'Nettapunk\''!!},
      ],
      backgroundColor: [
        '#2563eb',
      ],
      borderRadius:  20,
      barPercentage: .5,
    },
    {
      label: 'Submitted answers',
      data: [
        {!!$chart['answers']['Webtopia'] ?? '\'Webtopia\''!!},
        {!!$chart['answers']['DataVergent'] ?? '\'DataVergent\''!!},
        {!!$chart['answers']['Game Runner'] ?? '\'Game Runner\''!!},
        {!!$chart['answers']['Nettapunk'] ?? '\'Nettapunk\''!!},
      ],
      backgroundColor: [
        '#c026d3',
      ],
      borderRadius: 20,
      barPercentage: .5,
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      indexAxis: 'y',
      scales: {
        y: {
          grid: {
            display: false
          }
        },
      }
    }
  };

  const applicantChart = new Chart(
    document.getElementById('applicantChart'),
    config
  );

  const educationLevelChart = new Chart(
    document.getElementById('educationLevelChart'),
    {
    type: 'doughnut',
    data: {
      labels: [
        'Mattayom 4',
        'Mattayom 5',
        'Mattayom 6',
        'High Vocational Certificate',
      ],
      datasets: [{
        label: 'Education Level',
        data: [
          {{$chart['education_level']['M.4'] ?? 0}},
          {{$chart['education_level']['M.5'] ?? 0}},
          {{$chart['education_level']['M.6'] ?? 0}},
          {{$chart['education_level']['HVC.'] ?? 0}},
        ],
        backgroundColor: [
          '#2563eb',
          '#c026d3',
          '#6f32a8',
          '#a8328b',
        ],
      },]
    },
    options: {
      radius: '100%',
      cutout: '0%',
    }
  }
  );

const GenderChart = new Chart(
  document.getElementById('GenderChart'),
  {
  type: 'doughnut',
  data: {
    labels: [
      'Male',
      'Female',
      'LGBTQ+',
    ],
    datasets: [{
      label: 'Gender',
      data: [
        {{$chart['gender']['Male'] ?? 0}},
        {{$chart['gender']['Female'] ?? 0}},
        {{$chart['gender']['LGBTQ+'] ?? 0}},
      ],
      backgroundColor: [
        '#2563eb',
        '#c026d3',
        '#6f32a8',
      ],
    },]
  },
  options: {
    radius: '100%',
    cutout: '0%',
  }
}
);
</script>
@endsection
