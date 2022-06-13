@extends('layouts.app')
@section('main')
    <div class="h-full flex items-center justify-center flex-col space-y-4">
      <h1 class="text-2xl p-8">สถานะการสมัคร :
        @if (Auth::user()->registration === null)
          <span class="text-orange-600">รอบันทึกข้อมูลส่วนตัว</span>
        @elseif (Auth::user()->registration !== null && Auth::user()->answer === null)
          <span class="text-orange-600">รอบันทึกคำตอบคำถามค่าย</span>
        @else
          <span class="text-green-600">บันทึกข้อมูลครบถ้วน</span>
        @endif
      </h1>
      <a href="{{route('register')}}" class="w-3/4 md:w-1/4 rounded-md shadow-md px-8 py-5 text-white bg-blue-500 hover:bg-blue-600 flex items-center justify-center">
        <h1>กรอกข้อมูลส่วนตัว</h1>
      </a>
      <a @isset(Auth::user()->registration)href="{{route('question')}}"@endisset class="@if(!isset(Auth::user()->registration)) bg-gray-400 cursor-not-allowed @else bg-blue-500 hover:bg-blue-600 @endif w-3/4 md:w-1/4 rounded-md shadow-md px-8 py-5 text-white flex items-center justify-center">
        <h1>ตอบคำถามค่าย</h1>
      </a>
    </div>
    <footer class="p-5">
      <div class="text-center text-sm text-gray-500">
        <a href="https://itcamp18.in.th">ITCAMP18</a> © 2022 All Rights
        Reserved. | Development By <a href="https://Osphin.com">Osphin</a>
      </div>
    </footer>
    <script>
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
