<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <body>
    
    @yield('content')

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>