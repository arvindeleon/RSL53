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
        <link rel="stylesheet" href="/css/admin.css">
        <link rel="stylesheet" href="/css/clean.min.css">
        <link rel="stylesheet" href="/css/widgets.min.css">
        <style type="text/css">
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
        </style>
  </head>
  <body>
  <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                  <div class="container">
                    <div class="jumbotron">
                      <h1 class="display-4">Welcome to CC Rubric System!</h1>
                      <p class="lead">
                        This is the  Grading system for CC.
                      </p>
                      <hr class="m-y-md">
                      <p class="lead">
                        <a class="btn btn-success btn-xl" href="#">Proceed</a>
                      </p>
                    </div>
                </div>
            </div>
  </div>
    <script src="{{ elixir('js/general.js') }}"></script>
    <script src="/js/admin.js"></script>
  </body>
</html>