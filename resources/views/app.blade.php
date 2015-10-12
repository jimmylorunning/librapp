<!DOCTYPE html>
<html>
  <head>
    <title>Librapp</title>
    <link rel="stylesheet" href="/css/all.css">
  </head>
  <body>
    @include('partials.nav')
    <div class="container">
      @include('partials.flash')
      <div class="content">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
    <script src="js/all.js"></script>
    <script>
      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
  </body>
</html>