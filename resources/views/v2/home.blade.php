@extends('layouts.v2.app')
@section('title', 'IT Camp 18 - A post-apocalyptic world')
@section('main')
<div class="text-center max-w-2xl py-8">
  <div class="grid grid-cols-4 gap-x-8 mb-8 max-w-xl">
    <img src="https://itcamp18.in.th/camp-logo-3.png" alt="" class="hover:-translate-y-2 transition-all duration-500">
    <img src="https://itcamp18.in.th/camp-logo-1.png" alt="" class="hover:-translate-y-2 transition-all duration-500">
    <img src="https://itcamp18.in.th/camp-logo-2.png" alt="" class="hover:-translate-y-2 transition-all duration-500">
    <img src="https://itcamp18.in.th/camp-logo-4.png" alt="" class="hover:-translate-y-2 transition-all duration-500">
  </div>
  <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2">เรากำลังคัดเลือกผู้ที่จะเป็นความหวังใหม่ของเหล่ามนุษยชาติ</p>
  <p class="mb-8">การเดินทางสู่โลกใบใหม่กำลังจะเริ่มต้นขึ้นเร็ว ๆ นี้</p>
  <a href="{{route('auth.logout')}}" class="inline-flex justify-center items-center text-sm group active:opacity-50 focus:opacity-75 duration-300">ออกจากระบบ <span class="material-symbols-outlined translate-y-[0.09rem] text-[1.25rem] group-hover:ml-1 transition-all duration-500">chevron_right</span></a>
</div>
@endsection
