<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    @include('layouts.backend.head')
</head>
<body>
    
  @include('layouts.backend.header')
  @include('layouts.backend.sidebar')
  <!-- ################################################# Content ################################################ -->
       <!--main content start-->
       <section id="main-content">
          <section class="wrapper">
              
            @yield('content')

          </section>
      </section>
      <!--main content end-->

    @include('layouts.backend.scripts')
    <!-- @include('layouts.backend.footer') -->

</body>
   
</html>