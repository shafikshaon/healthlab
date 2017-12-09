<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title') | Health Lab</title>
  @include('layouts.profile.style')
</head>
<body id="page-top" class="landing-page no-skin-config">
    @include('layouts.profile.navbar')
      @yield('content')
      @include('layouts.profile.script')
  </body>
</html>
