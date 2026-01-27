<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/global.css') }}">
  @stack('style')
  
  
</head>
<body> 
    <div class="nav">
        @yield('navbar')
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
