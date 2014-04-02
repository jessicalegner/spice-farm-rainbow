<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spice Farm Rainbow</title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/signin.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h3 class="text-muted">Spice Farm Rainbow</h3>
            </div>
            @yield('content')
            <hr>
            <div id="push"></div>
            <footer class="footer hidden-print" style="text-align: center;">
              <div class="container">
                <span class="fn org">WebWerk.es</span>
              </div>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="/javascript/vendor/jquery.ui.widget.js"></script>
    </body>
</html>