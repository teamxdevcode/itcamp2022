@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('main')
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
      data: [140,89,162,101],
      backgroundColor: [
        '#2563eb',
      ],
      borderRadius:  20,
      barPercentage: .5,
    },
    {
      label: 'Answers',
      data: [29,52,113,58],
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
