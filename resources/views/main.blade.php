<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Acme</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('partials.nav')
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      @if(Request::is('/'))
        <div class="col-xs-12" style="margin-top: 25px;">
          @include('partials.showcase')
        </div>
      @endif
      <div class="col-lg-9 col-md-8">
        @yield('content')
      </div>
      <div class="col-lg-3 col-md-4">
        @include('partials.sidebar')
      </div>
  </div>


</body>
</html>
