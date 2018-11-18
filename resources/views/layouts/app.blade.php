<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
  
  <title>Venkon</title>
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body >
  @include('inc.navbar')
  @yield('content')
  @if($_SERVER['REQUEST_URI']!="/admin" && $_SERVER['REQUEST_URI']!="/login" && $_SERVER['REQUEST_URI']!="/register")
    @include('inc.footer')
  @endif
    <!-- script -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/Chart.min.js')}}"></script>
    
    <script>
      //smooth scroll
      $(document).ready(function(){
        // Add smooth scrolling to all links
        $(".smooth").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
        
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      });
    </script>
    
</body>
</html>
