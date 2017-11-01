<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title') | Learn With Laravel</title>
    @include('layouts.back.style')
  </head>
  <body>
    <div id="wrapper">
        @include('layouts.back.sideNavigation')
        <div id="page-wrapper" class="gray-bg">
            @include('layouts.back.topNavigation')
            @yield('content')
        </div>
    </div>
    @include('layouts.back.script')
  </body>
</html>
