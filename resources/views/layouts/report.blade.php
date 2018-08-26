<!DOCTYPE html>
<html lang="en">
  <head>
      @include('includes.head')
  </head>
  <body>
      @if(Auth::check())

      
      <!-- sidebar content -->


             <!-- Main content -->
        @yield('content')
        



   @include('includes.script')

   @endif

 @if(Auth::guest())
   <a href="/login" class="btn btn-info"> You need to login </a>
 @endif

  </body>
</html>