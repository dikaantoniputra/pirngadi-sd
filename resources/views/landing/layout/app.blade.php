<!DOCTYPE html>
<html lang="en-US" class="no-js">



@stack('before-style')
@include('landing.include.head')
@stack('after-style')

<body>

	<div class="wrapper">

   @include('landing.include.nav')
            @yield('content')
          
   @include('landing.include.footer')
           
         


    @stack('before-script')
    @include('landing.include.script')
    @stack('after-script')

   </div>
    

</body>

<!-- Mirrored from max-themes.net/demos/kingster/college/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 00:55:04 GMT -->
</html>
