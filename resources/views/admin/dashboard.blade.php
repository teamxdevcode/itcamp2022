@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('main')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 relative hover:scale-[101%] hover:shadow-xl transition-all duration-300">
    <h1 class="font-bold text-xl">
      <span class="block font-semibold text-sm text-gray-500">Current Users</span>
      {{$users}}
    </h1>
    <div class="cursor-default absolute right-5 top-1/2 -translate-y-1/2 bg-gradient-to-br from-blue-600 to-purple-700 text-white h-12 w-12 flex items-center justify-center rounded-xl">
      <span class="material-symbols-outlined">person</span>
    </div>
  </div>
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 relative hover:scale-[101%] hover:shadow-xl transition-all duration-300">
    <h1 class="font-bold text-xl">
      <span class="block font-semibold text-sm text-gray-500">Current Applicants</span>
      {{$applicants}}
    </h1>
    <div class="cursor-default absolute right-5 top-1/2 -translate-y-1/2 bg-gradient-to-br from-blue-600 to-purple-700 text-white h-12 w-12 flex items-center justify-center rounded-xl">
      <span class="material-symbols-outlined">contact_page</span>
    </div>
  </div>
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6 relative hover:scale-[101%] hover:shadow-xl transition-all duration-300">
    <h1 class="font-bold text-xl">
      <span class="block font-semibold text-sm text-gray-500">Current Answers</span>
      {{$answers}}
    </h1>
    <div class="cursor-default absolute right-5 top-1/2 -translate-y-1/2 bg-gradient-to-br from-blue-600 to-purple-700 text-white h-12 w-12 flex items-center justify-center rounded-xl">
      <span class="material-symbols-outlined">edit_note</span>
    </div>
  </div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6">
    <h1 class="font-semibold">Applicants and Answers</h1>
    <canvas id="applicantChart"></canvas>
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
        {{$chart['applicants']['Webtopia']}},
        {{$chart['applicants']['DataVergent']}},
        {{$chart['applicants']['Game Runner']}},
        {{$chart['applicants']['Nettapunk']}},
      ],
      backgroundColor: [
        '#2563eb',
      ],
      borderRadius:  20,
      barPercentage: .5,
    },
    {
      label: 'Answers',
      data: [
        {{$chart['answers']['Webtopia']}},
        {{$chart['answers']['DataVergent']}},
        {{$chart['answers']['Game Runner']}},
        {{$chart['answers']['Nettapunk']}},
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
</script>
@endsection
