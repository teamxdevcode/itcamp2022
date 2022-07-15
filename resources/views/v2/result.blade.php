@extends('layouts.v2.app')
@section('title', 'IT Camp 18 - A post-apocalyptic world')
@section('main')
<div class="text-center max-w-2xl py-8">
  @livewire('confirm')
  <a href="{{route('auth.logout')}}" class="inline-flex justify-center items-center text-sm group active:opacity-50 duration-300">ออกจากระบบ <span class="material-symbols-outlined translate-y-[0.09rem] text-[1.25rem] group-hover:ml-1 transition-all duration-500">chevron_right</span></a>
</div>
@endsection
