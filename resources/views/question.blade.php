@extends('layouts.app')
@section('main')
<div class="h-full">
  @livewire('question')
</div>

<script>
  function app() {
    return {};
  }

  function toggle() {
    var e = document.getElementById("condition_confirm");
    e.classList.toggle("hidden");
  }

  function toggleNav() {
    var e = document.getElementById("navbar");
    e.classList.toggle("hidden");
  }
</script>
@endsection
