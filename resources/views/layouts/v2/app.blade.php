<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', config('app.name'))</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}?ver=2.4">
  <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
  @livewireStyles
</head>
<body class="min-h-screen bg-zinc-900 flex items-center justify-center text-zinc-50 p-10 relative">
    @if (Auth::check())
    <nav class="bg-[#704607] p-2 text-xs text-center absolute top-0 w-full">
      <p>กำลังเข้าสู่ระบบด้วยบัญชี {{Auth::user()->first_name.' '.Auth::user()->last_name}}</p>
    </nav>
    @endif
    @yield('main')
    <footer class="absolute bottom-0 p-3">
      <p class="text-xs">ITCAMP18 © 2022 All Rights Reserved, Developed By Osphin.</p>
    </footer>
    <script type="text/javascript">
      if (window.location.hash && window.location.hash == '#_=_') {
        window.location.hash = '';
      }
    </script>
    @livewireScripts
</body>
</html>
