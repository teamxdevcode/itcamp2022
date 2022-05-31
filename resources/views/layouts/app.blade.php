@extends('layouts.head')

@section('title', 'หน้าหลัก')

@section('content')

    <nav class="bg-zinc-900 border-b border-zinc-700">
        <div class="container mx-auto flex flex-row justify-between items-center py-4 max-w-screen-lg 2xl:max-w-screen-xl">
            <div class="flex items-center gap-4">
                <a href="#" class="font-bold uppercase text-lg text-zinc-400 hover:text-zinc-200 transition">{{config('app.name')}}</a>
                <a href="#" class="hover:text-gray-200/70 transition">หน้าหลัก</a>
                <a href="#" class="hover:text-gray-200/70 transition">กำหนดการรับสมัคร</a>
                <a href="#" class="hover:text-gray-200/70 transition">ติดต่อโรงเรียน</a>
            </div>
        </div>
    </nav>
    
    <footer class="container mx-auto flex flex-row justify-between mt-24 mb-4 max-w-screen-lg 2xl:max-w-screen-xl">
        <div>สงวนลิขสิทธิ์ © 2565 <a href="http://bodin4.ac.th" class="text-blue-400 hover:underline" target="_blank">โรงเรียนบดินทรเดชา (สิงห์ สิงหเสนี) ๔</a></div>
        <div class="flex flex-row gap-3 justify-center">
            <a href="#" class="text-blue-400 hover:underline">ข้อตกลงการใช้งาน</a>
            <a href="#" class="text-blue-400 hover:underline">นโยบายความเป็นส่วนตัว</a>
        </div>
    </footer>
</body>

@endsection