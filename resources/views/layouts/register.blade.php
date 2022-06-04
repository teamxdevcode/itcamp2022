@extends('layouts.head')

@section('title', 'จัดการกรอกข้อมูล')

@section('content')
<main class="container mx-auto max-w-screen-lg 2xl:max-w-screen-xl h-screen relative">
  <nav class="flex justify-between py-4 items-center">
    <h1 class="hover:text-cyan-500 hover:underline hover:underline-offset-2 transition-all ease-in-out duration-300"><a href="{{route('home')}}">ITCAMP18</a></h1>
    <ul class="flex justify-center items-center space-x-10">
      <li class="hover:text-cyan-500 hover:underline hover:underline-offset-2 transition-all ease-in-out duration-300"><a href="{{route('home')}}">ลงทะเบียนเข้าค่าย</a></li>
      <li class="cursor-pointer hover:underline hover:underline-offset-2 transition-all ease-in-out duration-300 px-6 py-3 rounded-md text-teal-300 hover:bg-white ring-2 ring-gray-300 hover:text-teal-300 border-dashed"><a href="{{route('auth.logout')}}">ออกจากระบบ</a></li>
    </ul>
  </nav>
  @yield('main')
  <footer class="absolute top-1/2 left-1/2 transform -translate-x-1/2 translate-y-96">
    &copy; ITCAMP18 KMITL, All rights reserved.
  </footer>
</main>
@endsection
