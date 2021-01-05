<!doctype html>

<html lang="fa">
<head>
  <meta charset="utf-8">
  <title> فروشگاه اینترنتی دیجی کالا @yield('title')</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://kit.fontawesome.com/3ba4dad25a.js" crossorigin="anonymous"></script>
</head>

<body dir='rtl'>
{{--header of my application --}}
  @include('layout.landing-header')
  <div class="container">
     @yield('products')
    </div>
    {{--footer--}}
    @include('layout.footer')
  <script src="{{asset('js/app.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

  <script type="text/javascript">
      var url = "{{route('autocomplete.ajax')}}";
      $('#keyword').typeahead({
        source: function (query,process){
          return $.get(url,{ query:query },function(data){
              return process(data);
          });
        }
      });
  </script>
</body>
</html>
