<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel APP - @yield('title')</title>
   
    @vite(['resources/app.js']) 
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    @vite(['resources/app.css']) 
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    

    
  
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        @include('layouts.navbar_top')
        @include('layouts.navbar_sidebar')
        
        <!-- Page Content  -->
        <div id="content">

            @include('layouts.flash_message')
            @yield('main')
            @include('layouts.footer')

        </div> <!-- END content -->
    </div> <!-- END wraper -->
    
    <div class="preloader-container">
        <div class="jumping-dots-loader"> 
            <span></span> <span></span> <span></span> 
        </div>
        <div class="moving-gradient"></div>
    </div>

</body>
</html>