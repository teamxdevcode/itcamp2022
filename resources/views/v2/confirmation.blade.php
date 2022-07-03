@extends('layouts.v2.app')
@section('title', 'IT Camp 18 - A post-apocalyptic world')
@section('main')
<div class="text-center w-full max-w-xl py-8">
  @livewire('confirmation-page')
  <a href="{{route('auth.logout')}}" class="inline-flex justify-center items-center text-sm group">ออกจากระบบ <span class="material-symbols-outlined translate-y-[0.09rem] text-[1.25rem] group-hover:ml-1 transition-all duration-500">chevron_right</span></a>
</div>
@endsection
