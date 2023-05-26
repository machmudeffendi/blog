<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLOG - @yield('title', 'Home')</title>
  @vite(['resources/css/style.css', 'resources/scss/app.scss', 'resources/js/app.js'])
  <style>
    main.container {
      min-height: calc(100vh - 104px - 1.5rem);
    }
  </style>
</head>
<body>
  
  <main class="container @yield('add-class-main', '')">
    @yield('content')
  </main>

  @include('layout.footer')
</body>
</html>