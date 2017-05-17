<html>
      <head>
            <title>@yield('title')</title>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/styles.css">
            <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
      </head>
      @yield('bodysplash')
      <body>
            <div class ="site-wrap">
              <ul class="menu">
                  @yield('livedrones')
                  <li><a href="{{url('/map')}}">Live Map</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                  <li><a href="{{url('/login')}}">Sign In</a></li>
              </ul>
              @yield('body')
            <div class="footer">
             &copy; hiDrone 2017
            </div>
      </body>
</html>