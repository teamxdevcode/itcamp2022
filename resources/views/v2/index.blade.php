@extends('layouts.v2.app')
@section('title', 'IT Camp 18 - A post-apocalyptic world')
@section('main')
<div class="text-center max-w-xl py-8">
  <img src="https://itcamp18.in.th/intro-logo.png" alt="ITCAMP18" class="h-36 mx-auto">
  <p class="my-8 text-base md:text-lg">"เมื่อโลกใบเดิมล่มสลาย โลกใบใหม่ได้ถือกำเนิด ก่อให้เกิดความหวังใหม่ของมนุษยชาติ น้อง ๆ พร้อมหรือยังที่จะเป็นความหวังของโลกใบนี้"</p>
  <p class="text-xs opacity-50 font-extralight leading-4 border border-zinc-700 rounded-xl bg-zinc-800 p-3 px-5 inline-block mb-8">การดำเนินการต่อหมายความว่าคุณได้ยอมรับข้อตกลงและเงื่อนไขการใช้งานและนโยบายความเป็นส่วนตัวของเรา</p>
  <a href="{{route('auth.login')}}" class="bg-blue-700 hover:bg-blue-600 transition-all duration-500 p-3 px-8 block rounded-xl max-w-[16rem] mx-auto">ดำเนินการต่อด้วย Facebook</a>
</div>
@endsection
