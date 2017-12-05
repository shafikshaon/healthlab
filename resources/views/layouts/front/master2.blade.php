<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title') | Health Lab</title>
  @include('layouts.front.style')
</head>
<body id="page-top" class="landing-page no-skin-config">
        @include('layouts.front.navbar')
      @yield('content')
      @include('layouts.front.script2')
  </body>
</html>
