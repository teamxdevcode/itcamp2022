@extends('admin.layouts.app')
@section('title', 'Registrations')
@section('main')
<div class="grid grid-cols-1">
  <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-5 px-6">
    <h1 class="font-semibold mb-3">Registrations</h1>
    <livewire:admin.confirmation-table />
  </div>
</div>
@endsection
