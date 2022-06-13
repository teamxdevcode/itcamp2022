@extends('layouts.app')
@section('main')
    <div class="h-full flex flex-col items-center justify-center">
      <a href="{{route('register')}}" class="text-white bg-blue-500 hover:bg-blue-600 transition rounded-lg p-3 w-full max-w-xs text-center first:mb-3">
        <h1>กรอกข้อมูลส่วนตัว</h1>
      </a>
      @isset(Auth::user()->registration)
        <a href="{{route('question')}}" class="text-white bg-blue-500 hover:bg-blue-600 transition rounded-lg p-3 w-full max-w-xs text-center first:mb-3">
          <h1>ตอบคำถามค่าย</h1>
        </a>
      @endisset
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
