<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title') | Health Lab</title>
  @include('layouts.front.style')
</head>
<body id="page-top" class="landing-page no-skin-config">
      @include('layouts.front.navigation')
      @yield('content')
      @include('layouts.front.script')
  </body>
</html>
