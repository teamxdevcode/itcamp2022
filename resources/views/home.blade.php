@extends('layouts.register')
@section('main')
<div class="flex h-3/4 items-center justify-center flex-col">
  {{-- Success is as dangerous as failure. --}}
  <div class="space-y-10 flex items-center justify-center flex-col">
    <h1 class="text-6xl">สถานะของสมาชิก : <span class="text-yellow-500">ยังกรอกเอกสารไม่สำเร็จ</span></h1>
  </div>
  <div class="mt-20 flex items-center justify-center w-full space-y-5 md:space-y-0 md:space-x-8 flex-col md:flex-row">
    <a href="{{route('registration.register')}}" class="h-full cursor-not-allowed hover:-translate-y-2 transition-all ease-in-out duration-300 w-8/12 md:w-3/12 bg-white border-2 border-gray-200 hover:ring-offset-2 hover:ring-green-300 ring-gray-200 ring-2 rounded-md py-8 flex-col space-y-5 flex items-center justify-center text-3xl">
      <svg class="fill-green-500 w-1/2" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="m11.998 2.005c5.517 0 9.997 4.48 9.997 9.997 0 5.518-4.48 9.998-9.997 9.998-5.518 0-9.998-4.48-9.998-9.998 0-5.517 4.48-9.997 9.998-9.997zm0 1.5c-4.69 0-8.498 3.807-8.498 8.497s3.808 8.498 8.498 8.498 8.497-3.808 8.497-8.498-3.807-8.497-8.497-8.497zm-5.049 8.886 3.851 3.43c.142.128.321.19.499.19.202 0 .405-.081.552-.242l5.953-6.509c.131-.143.196-.323.196-.502 0-.41-.331-.747-.748-.747-.204 0-.405.082-.554.243l-5.453 5.962-3.298-2.938c-.144-.127-.321-.19-.499-.19-.415 0-.748.335-.748.746 0 .205.084.409.249.557z" fill-rule="nonzero" />
      </svg>
      <p class="text-center text-md md:text-xl">1. ลงทะเบียนเข้าค่าย</p>
      <p></p>
    </a>
    <a href="{{route('registration.campSelection')}}" class="h-full cursor-not-allowed hover:-translate-y-2 transition-all ease-in-out duration-300 w-8/12 md:w-3/12 bg-white border-2 border-gray-200 hover:ring-offset-2 hover:ring-green-300 ring-gray-200 ring-2 rounded-md py-8 flex-col space-y-5 flex items-center justify-center text-3xl">
      <svg class="fill-green-500 w-1/2" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="m11.998 2.005c5.517 0 9.997 4.48 9.997 9.997 0 5.518-4.48 9.998-9.997 9.998-5.518 0-9.998-4.48-9.998-9.998 0-5.517 4.48-9.997 9.998-9.997zm0 1.5c-4.69 0-8.498 3.807-8.498 8.497s3.808 8.498 8.498 8.498 8.497-3.808 8.497-8.498-3.807-8.497-8.497-8.497zm-5.049 8.886 3.851 3.43c.142.128.321.19.499.19.202 0 .405-.081.552-.242l5.953-6.509c.131-.143.196-.323.196-.502 0-.41-.331-.747-.748-.747-.204 0-.405.082-.554.243l-5.453 5.962-3.298-2.938c-.144-.127-.321-.19-.499-.19-.415 0-.748.335-.748.746 0 .205.084.409.249.557z" fill-rule="nonzero" />
      </svg>
      <p class="text-center text-md md:text-xl">2. เลือกค่ายย่อย</p>
      <p class="px-5 py-3 rounded-md shadow-md ring-4 ring-amber-200 bg-amber-600 text-white">ค่ายเว็บ !</p>
    </a>
    <a href="{{route('registration.campQuestion')}}" class="h-full cursor-pointer hover:-translate-y-2 transition-all ease-in-out duration-300 w-8/12 md:w-3/12 bg-white border-2 border-gray-200 hover:ring-offset-2 hover:ring-red-300 ring-gray-200 ring-2 rounded-md py-8 flex-col space-y-5 flex items-center justify-center text-3xl">
      <svg class="fill-red-500 w-1/2" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z" fill-rule="nonzero" /></svg>
      <p class="text-center text-md md:text-xl">3. ตอบคำถามประจำค่าย</p>
    </a>
  </div>
</div>
@endsection
