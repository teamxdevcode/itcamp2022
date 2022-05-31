@extends('layouts.head')

@section('title', 'หน้าหลัก')

@section('content')
<main class="container mx-auto max-w-screen-lg 2xl:max-w-screen-xl h-screen flex items-center justify-center ">
	@yield('main')
</main>
@endsection