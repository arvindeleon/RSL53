<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      @yield('title')
    </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ elixir('css/general.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/frontend.css') }}">
        @yield('head_script')
  </head>
  <body>
    @include('layouts.includes.frontend.header')
      <div class="container">
        @yield('content')
      </div>
    @include('layouts.includes.frontend.footer')
    <script src="{{ elixir('js/general.js') }}"></script>
    <script src="{{ elixir('js/frontend.js') }}"></script>
    @yield('footer_script')
  </body>
</html>