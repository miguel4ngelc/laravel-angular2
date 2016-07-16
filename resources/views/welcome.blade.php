<!DOCTYPE html>
<html>
    <head>
      <title>Laravel</title>

      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

  </head>

    <body>
      <div class="container">
        <my-app>Loading...</my-app>
      </div>

      @if (Config::get('app.debug'))
        <script type="text/javascript">
            document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
      @endif
    </body>


  <script src="js/vendor.js"></script>
  <script src="js/app.js"></script>
</html>
