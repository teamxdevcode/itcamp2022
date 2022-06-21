@php
  $path = explode('/', request()->path());
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    @hasSection('title')
      @yield('title') |
    @endif
    Admin Panel - {{config('app.name')}}
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 relative text-gray-700" x-data="{menu:false}">
  <nav x-init="menu=window.innerWidth>=1024?true:false" @resize.window="menu=window.innerWidth>=1024?true:false" x-show="menu" x-transition.duration.300ms x-on:click.outside="if(window.innerWidth<1024) {menu=false}" class="absolute h-screen w-72 text-center p-4 lg:p-6 lg:px-8 z-10 lg:translate-x-0">
    <div class="bg-white lg:bg-transparent rounded-2xl h-full w-full p-4 lg:p-0 shadow-lg lg:shadow-none shadow-gray-200 transition-all duration-300">
      <h1 class="py-5 text-sm font-semibold cursor-default">ITCAMP18 Dashboard</h1>
      <hr class="block pb-6 w-2/3 mx-auto">
      <ul class="text-start flex flex-col gap-2">
        <li>
          <a href="{{route('admin.dashboard')}}" class="bg-white w-full flex items-center p-3 px-4 gap-3 rounded-xl shadow-lg shadow-gray-200 font-semibold text-sm">
            <span class="material-symbols-outlined w-8 h-8 flex items-center justify-center bg-gradient-to-br from-blue-600 to-purple-700 text-white rounded-lg text-[1rem]">home</span>
            Dashboard
          </a>
        </li>
        <li>
          <a href="{{route('admin.registrations')}}" class="w-full flex items-center p-3 px-4 gap-3 rounded-xl text-sm hover:bg-gray-200 transition duration-300 cursor-not-allowed">
            <span class="material-symbols-outlined shadow-lg shadow-gray-200 w-8 h-8 flex items-center justify-center bg-white rounded-lg text-[1rem]">inbox</span>
            Registrations
          </a>
        </li>
        <li>
          <button disabled href="#" class="w-full flex items-center p-3 px-4 gap-3 rounded-xl text-sm hover:bg-gray-200 transition duration-300 cursor-not-allowed">
            <span class="material-symbols-outlined shadow-lg shadow-gray-200 w-8 h-8 flex items-center justify-center bg-white rounded-lg text-[1rem]">person</span>
            Account Management
          </button>
        </li>
        <li>
          <button disabled href="#" class="w-full flex items-center p-3 px-4 gap-3 rounded-xl text-sm hover:bg-gray-200 transition duration-300 cursor-not-allowed">
            <span class="material-symbols-outlined shadow-lg shadow-gray-200 w-8 h-8 flex items-center justify-center bg-white rounded-lg text-[1rem]">settings</span>
            Settings
          </button>
        </li>
      </ul>
    </div>
  </nav>
  <main class="lg:ml-72 p-4 px-6 transition-all duration-300">
    <div class="flex items-center mb-6">
      <h1 class="font-bold">
        <span class="text-sm font-normal block cursor-default">
          <span class="text-gray-400 last:text-gray-700">Pages</span>
          @foreach ($path as $page)
          <span class="text-gray-400 last:text-gray-700">/ {{ucwords($page)}}</span>
          @endforeach
          {!! count($path) === 1 ? '<span class="text-gray-400 last:text-gray-700">/ Dashboard</span>':'' !!}
        </span>
        {{count($path) === 1 ? 'Dashboard':ucwords(end($path))}}
      </h1>
      <div class="ml-auto flex flex-row gap-2">
        <button type="button" x-on:click="menu=!menu" class="flex items-center gap-1 font-semibold text-sm lg:hidden">
          <span class="material-symbols-outlined text-[1.25rem]">menu</span>
        </button>
        <a href="{{route('admin.signout')}}" class="flex items-center gap-1 font-semibold text-sm">
          <span class="material-symbols-outlined text-[1.25rem]">logout</span>
          <span class="hidden lg:inline">Sing out</span>
        </a>
      </div>
    </div>
    @section('main')
    @show
  </main>
</body>
</html>
