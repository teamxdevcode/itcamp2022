<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @livewireStyles
</head>

<body class="h-screen bg-gradient-to-b from-black via-[#3d3d3d] to-black flex items-center flex-col">
    <nav class="container mx-auto px-5 md:px-32 text-white flex py-8 justify-between items-center">
        <h1 class="font-bold text-xl"><a href="index.html">ITCAMP18</a></h1>
        <ul class="flex space-x-3 items-center">
            <li class="text-xl">สวัสดี, Thanawat</li>
            <li class="text-lg p-5 underline">
                <a href="index.html">ออกจากระบบ</a>
            </li>
        </ul>
    </nav>
    @section('main')
    @show
    @livewireScripts
</body>

</html>
