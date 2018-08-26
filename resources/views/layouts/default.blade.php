<!DOCTYPE html>
<html lang="en">
  <head>
      @include('includes.head')
  </head>
  <body>
      @if(Auth::check())
    <div class="wrapper">
      
      <!-- sidebar content -->
      @include('includes.sidebar')

      <div id="content">
          
       <!-- top nav content -->
        @include('includes.header')
        @include('includes.flash')
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                 <div class="row">
                    <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h2>@yield('heading')</h2>
                        <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
        <!-- Main content -->
        @yield('content')
        <footer >
            @include('includes.footer')
          </footer>
      </div>
         
</div>
</div>
</div>
</div>
</div>
</div>

</div>


   @include('includes.script')

   @endif

 @if(Auth::guest())
   <a href="/login" class="btn btn-info"> You need to login </a>
 @endif

  </body>
</html>