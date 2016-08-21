<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>SuperZapatos</title>

  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    html, body {
      height:100%;
    }

    section { padding:20px; }
    footer {
      background-color: #333;
      color:white;
      text-align: center;
      position: absolute;
      width:100%;
      line-height: 50px;
      bottom:0;
      height:50px;
      z-index: 1;
    }
    .HomePage{
      font-family: 'Righteous', cursive;
      font-size:200px;
      text-align: center;
      margin:0 auto;
      margin-top: 100px;
      color:#999;
      text-shadow: 10px 10px #f0f0f0;
    }
    .HomePageSub{
      font-family: 'Righteous', cursive;
      font-size:20px;
      text-align: center;
      margin:0 auto;
      color:#999;
      text-shadow: none;
      margin-top: -50px;
    }
  </style>
</head>

<body>
	<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL('/')}}">SuperZapatos</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php
              $request= Route::getFacadeRoot()->current()->uri();
              ?>
              <li<?php if (stristr($request,'tienda')) { echo ' class="active"'; } ?>><a href="{{URL('/tienda')}}">Tiendas</a></li>
              <li<?php if (stristr($request,'producto')) { echo ' class="active"'; } ?>><a href="{{URL('/producto')}}">Productos</a></li>
            </ul>
          </div>
        </div>
    </nav>
	</header>
	<section>
    @yield('content')
	</section>
	<footer>
		<p>Ing. Sebasti&aacute;n Davicco</p>
	</footer>

</body>

</html>
