<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>@yield('title') - {{config('app.name')}}</title>

	@livewireStyles
</head>

<body class="bg-[#F5F7FA]">
	@yield('content')
	@livewireScripts
</body>

</html>
