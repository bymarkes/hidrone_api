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
                    <img src="images/hidrone_logo.png" style="width: 135px; left:50px; position: absolute; z-index: 5; top:-3px; ">
                  @yield('livedrones')
                  <nav id="nav-3">
                    <a class="link-3" id ="map-page" href="{{url('/map')}}">Live Map</a>
                    <a class="link-3" id ="about-page" href="{{url('/about')}}">About</a>
                    <a class="link-3" id ="contact-page" href="{{url('/contact')}}">Contact</a>
                    <a class="link-3" id ="faq-page" href="{{url('/faq')}}">FAQ</a>
                    <a class="link-3" id ="signin-page" href="{{url('/login')}}">Sign In</a>
                  </nav>
              </div>
              @yield('body')
            <div class="footer">
             &copy; hiDrone 2017
            </div>
      </body>
</html>