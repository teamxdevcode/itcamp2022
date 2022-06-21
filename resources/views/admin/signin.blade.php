<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign in | Admin Panel - {{config('app.name')}}</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @livewireStyles
</head>
<body class="bg-gray-100 text-gray-700 min-h-screen flex items-center justify-center p-6">
  @livewire('admin.auth.signin')
  @livewireScripts
</body>
</html>
