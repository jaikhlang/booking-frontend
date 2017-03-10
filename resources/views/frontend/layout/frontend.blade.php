<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}" media="screen,projection">
    @yield('stylesheets')
  </head>
  <body>
    <div id="app" class="grey lighten-3">
      @include('frontend.layout.partial._header')
        @yield('content')
      @include('frontend.layout.partial._footer')
    </div>
  </body>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/materialize.js') }}"></script>
    @yield('scripts')
</html>
