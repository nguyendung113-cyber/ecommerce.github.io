<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    @include('home.slider')
    @include('home.product')
    @include('home.contact')
    @include('home.info')
  </div>




  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>