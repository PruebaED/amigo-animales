<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
	  <meta content="text/html"; charset="utf-8" http-equiv="content-type">
    @if (isset($animal->animal_id))
      <link rel="STYLESHEET" type="text/css" href="../css/scroll-to-top.css">
    @else
      <link rel="STYLESHEET" type="text/css" href="css/scroll-to-top.css">
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body class="{{ Session::get('theme') }}">
  	<!-- Scroll to top -->
  	<a href="#" id="scrollToTopButton" class="cd-top"></a>
  	<!-- ... -->
  </body>

</html>