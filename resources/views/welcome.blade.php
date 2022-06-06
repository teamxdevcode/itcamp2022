@extends('layouts.app')

@section('main')
<div class="h-screen flex mt-10 md:mt-0 items-center justify-center flex-col space-y-10 max-w-screen overflow-hidden">
  <!-- <h1 class="text-8xl h-1/3 glitch">ITCAMP18</h1> -->
  <h1 class="glitch-camp text-7xl md:text-9xl">
    <span aria-hidden="true">ITCAMP18</span>
    ITCAMP18
    <span aria-hidden="true">ITCAMP18</span>
  </h1>
  <div class="h-1/3">
    <a href="{{route('auth.redirect')}}" class="bg-[#1877F2] text-white flex px-8 py-4 space-x-4 rounded-md border-b-8 border-r-2 hover:translate-y-2 hover:border-b-4 transition-all ease-in-out duration-200 border-blue-900">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.3447 11.1068L14.863 7.69417H11.621V5.48058C11.621 4.54672 12.0731 3.63592 13.5251 3.63592H15V0.730583C15 0.730583 13.6621 0.5 12.3836 0.5C9.71233 0.5 7.96804 2.13483 7.96804 5.0932V7.69417H5V11.1068H7.96804V19.357C8.56393 19.4516 9.17352 19.5 9.79452 19.5C10.4155 19.5 11.0251 19.4516 11.621 19.357V11.1068H14.3447Z" fill="white" />
      </svg>
      <span>เข้าสู่ระบบด้วย facebook</span>
    </a>
  </div>
</div>
@endsection
