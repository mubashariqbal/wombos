<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wombos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <body id="@yield('body-id', 'home')">

    @if (App::environment('production'))
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79194354-5', 'auto');
      ga('send', 'pageview');
    </script>
    @endif
        
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Wombos</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/f">Fonts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/a">About</a>
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

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>

    @yield('footer-script')
  </body>
</html>