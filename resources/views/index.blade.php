@extends('layouts.app')
@section('main')
    <div class="h-full flex flex-col items-center justify-center">
      <img src="https://itcamp18.in.th/intro-logo.png" alt="" class="h-56 mb-6">
      <button
        class="font-semibold py-5 px-6 bg-blue-600 hover:bg-blue-700 transition-all ease-in-out duration-200 rounded-md text-white"
        type="button"
        onclick="toggle()"
      >
        เข้าสู่ระบบด้วย Facebook
      </button>
    </div>
    <div
      class="hidden absolute bg-black/50 h-full w-full flex items-center justify-center"
      id="condition_confirm"
    >
      <span
        class="absolute top-0 right-0 my-5 mx-10 text-white font-bold text-xl cursor-pointer"
        onclick="toggle()"
      >
        X
      </span>
      <form
        action="{{route('auth.login')}}"
        class="bg-white w-full md:w-2/6 mx-5 rounded-md p-6"
      >
        <div class="flex text-md items-center justify-center">
          <input
            type="checkbox"
            name="condition_confirm_input"
            id="condition_confirm_input"
            class="my-6"
            required
          />
          <label for="condition_confirm_input" class="ml-2 font-light">ยอมรับ<a href="{{asset('terms-and-conditions.pdf')}}" target="_blank" class="text-blue-500 underline">ข้อกำหนดและเงื่อนไข</a>การเข้าร่วมโครงการ</label>
        </div>
        <div class="w-full text-center">
          <button
            type="submit"
            class="text-center bg-blue-500 py-4 px-6 rounded-md text-white"
          >
            ดำเนินการต่อ
          </button>
        </div>
      </form>
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
