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
      min-height: calc(100vh - 161px);
      
    }
  </style>
</head>
<body>
  @include('layout.navbar')

  <main class="container py-3">
    <div class="row">
      <div class="col-lg-10 col-12 offset-md-1">
        @yield('content')
      </div>
    </div>
  </main>

  @include('layout.footer')
</body>
</html>