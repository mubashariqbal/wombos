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
        
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Wombos</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fonts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>


    @yield('content')


    <footer>
      <div class="container">
        <div>
          <div class="row">
            <div class="col-md-6">
              &copy; 2017 Wombos
            </div>
            <div class="col-md-6 text-md-right">
              Built by <a href="https://twitter.com/mubashariqbal">@mubashariqbal</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>