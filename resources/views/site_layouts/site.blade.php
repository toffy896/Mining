<!DOCTYPE html>
<html lang="en">
<head>
  @include('site_includes.site_head')  
</head>
<body>
    
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="all_header navbar-fixed-top">
        <!-- Top Header_Area -->
        @include('site_includes.header')
    </header>
@yield('content')
    <!-- Footer Area -->
    <footer class="footer_area">
            @include('site_includes.footer') 
    </footer>
    <!-- End Footer Area -->

    @include('site_includes.script') 
</body>
</html>

