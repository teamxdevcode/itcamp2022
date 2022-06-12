<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITCAMP18 | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
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
    </style>
  </head>
  <body class="h-screen flex flex-col relative">
    <nav class="hidden md:block bg-white w-full shadow-md py-6">
      <div class="flex justify-between container mx-auto items-center px-20">
        <a href="index.html">ITCAMP18</a>
        <ul class="flex space-x-8">
          <li>สถานะการสมัคร</li>
          <li>ช่วยเหลือ</li>
          <li>เข้าสู่ระบบ</li>
        </ul>
      </div>
    </nav>
    <!-- create mobile navbar -->
    <div class="md:hidden block p-5" onclick="toggleNav()">
      <div class="flex justify-between items-center">
        <a href="index.html" class="text-xl font-bold text-gray-800">ITCAMP18</a>
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
          <li
            class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md"
          >
            สถานะการสมัคร
          </li>
          <li
            class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md"
          >
            ช่วยเหลือ
          </li>
          <li
            class="p-2 hover:text-gray-800 hover:bg-gray-100 w-full flex justify-end rounded-md"
          >
            เข้าสู่ระบบ
          </li>
        </ul>
      </div>
    </div>
    <div class="h-full flex items-center justify-center">
      <a href="{{route('register')}}" class="w-1/2 flex items-center justify-center">
        <h1>กรอกข้อมูลส่วนตัว</h1>
      </a>
      <a href="{{route('question')}}" class="w-1/2 flex items-center justify-center">
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
  </body>
</html>
