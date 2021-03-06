<!doctype html>
<html lang="fa">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://kit.fontawesome.com/3ba4dad25a.js" crossorigin="anonymous"></script>
</head>

<body dir='rtl'>
{{--header of my application --}}
  @include('layout.landing-header')
  <div class="container">
     @yield('cart')
    </div>
     @include('layout.footer')
  {{--js files--}}
  @yield('extra-js')
  <script src="js/scripts.js"></script>
</body>
</html>
