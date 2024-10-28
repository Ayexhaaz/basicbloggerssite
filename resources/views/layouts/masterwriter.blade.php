<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    @include('partials.linksAdmin')
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('partials._sidebarWriter')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('partials._navbarwriter')
           @yield('content')


</div>
</div>
@include('partials.jsAdmin')

</body>
</html>
