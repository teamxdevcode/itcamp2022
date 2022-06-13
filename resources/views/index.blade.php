@extends('layouts.app')
@section('main')
    <div class="h-full flex flex-col items-center justify-center">
      <img src="https://itcamp18.in.th/intro-logo.png" alt="" class="h-56 mb-8">
      <button
        class="font-bold text-xl flex items-center border-2 space-x-3 hover:border-[#1877F2] hover:bg-white px-6 py-3 bg-[#1877F2] group hover:text-[#1877F2] transition-all ease-in-out duration-200 rounded-md text-white"
        type="button"
        onclick="toggle()"
      >
        <svg
          width="36"
          height="36"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
                    class="group-hover:fill-[#1877F2]"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M24 12.0707C24 5.40424 18.6274 0 12 0C5.37258 0 0 5.40424 0 12.0707C0 18.0956 4.38823 23.0893 10.125 23.9948V15.5599H7.07812V12.0707H10.125V9.41139C10.125 6.38617 11.9165 4.71513 14.6576 4.71513C15.9705 4.71513 17.3438 4.95088 17.3438 4.95088V7.92141H15.8306C14.3399 7.92141 13.875 8.85187 13.875 9.80645V12.0707H17.2031L16.6711 15.5599H13.875V23.9948C19.6118 23.0893 24 18.0956 24 12.0707Z"
                        class="fill-[#FFFFFE] group-hover:fill-[#1877F2]"
          />
        </svg>
        <span>Continue with Facebook</span>
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
