<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITCAMP18 | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
      defer
    ></script>
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <script>
      tailwind.config = {
        theme: {
          extend: {},
        },
      };
    </script>
    <style>
      @import url("https://cdn.jsdelivr.net/gh/lazywasabi/thai-web-fonts@6/fonts/Anuphan/Anuphan.css");
      * {
        /* font-family: "Noto Sans Thai", sans-serif; */
        font-family: "Anuphan", sans-serif;
      }
      [x-cloak] {
        display: none;
      }

      .svg-icon {
        width: 1em;
        height: 1em;
      }

      .svg-icon path,
      .svg-icon polygon,
      .svg-icon rect {
        fill: #333;
      }

      .svg-icon circle {
        stroke: #4691f6;
        stroke-width: 1;
      }

      [type="checkbox"] {
        box-sizing: border-box;
        padding: 0;
      }

      .form-checkbox,
      .form-radio {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
        display: inline-block;
        vertical-align: middle;
        background-origin: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        flex-shrink: 0;
        color: currentColor;
        background-color: #fff;
        border-color: #e2e8f0;
        border-width: 1px;
        height: 1.4em;
        width: 1.4em;
      }

      .form-checkbox {
        border-radius: 0.25rem;
      }

      .form-radio {
        border-radius: 50%;
      }

      .form-checkbox:checked {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
      }

      .form-radio:checked {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
      }
    </style>
    @livewireStyles
  </head>
  <body class="h-screen flex flex-col relative bg-[#f5f5f5]">
    <nav class="hidden md:block bg-white w-full shadow-md py-6">
      <div class="flex justify-between container mx-auto items-center px-20">
        <a href="{{route('home')}}">ITCAMP18</a>
        <ul class="flex space-x-8">
          {{-- <li><a href="#">สถานะการสมัคร</a></li>
          <li><a href="#">ช่วยเหลือ</a></li> --}}
          @if (Auth::check())
              <li><a href="{{route('auth.logout')}}">ออกจากระบบ</a></li>
          @else
              <li><a href="{{route('auth.login')}}">เข้าสู่ระบบ</a></li>
          @endif
        </ul>
      </div>
    </nav>
    <!-- mobile navbar -->
    <div class="md:hidden block p-5" onclick="toggleNav()">
      <div class="flex justify-between items-center">
        <a href="index.html" class="text-xl font-bold text-gray-800"
          >ITCAMP18</a
        >
        <div class="p-2 border border-gray-200 rounded-md text-gray-100">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-gray-500"
          >
            <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
          </svg>
        </div>
      </div>
      <div class="mt-4 hidden" id="navbar">
        <ul class="flex flex-col space-y-2 items-end">
          {{-- <li class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md">สถานะการสมัคร</li>
          <li class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md">ช่วยเหลือ</li> --}}
          @if (Auth::check())
            <li class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md"><a href="{{route('auth.logout')}}">ออกจากระบบ</a></li>
          @else
            <li class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md"><a href="{{route('auth.login')}}">เข้าสู่ระบบ</a></li>
          @endif
        </ul>
      </div>
    </div>
    @yield('main')
    @livewireScripts
  </body>
</html>
