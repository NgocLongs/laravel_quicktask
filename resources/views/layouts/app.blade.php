<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Quickstart - Basic</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				    <div class="navbar-header">
				        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				        </button>
				        <a class="navbar-brand" href="#">{{ trans('message.Task List') }}</a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				        <ul class="nav navbar-nav">
				            <li class=""><a href="#">{{ trans('message.Home') }}</a></li>
				            <li class="dropdown">
				                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ trans('message.Language') }}<span class="caret"></span></a>
				                <ul class="dropdown-menu">
				                    <li><a href="{{ route('lang', ['lang' => 'vi']) }}">VI</a></li>
				                    <li><a href="{{ route('lang', ['lang' => 'en']) }}">EN</a></li>
				                </ul>
				            </li>
				        </ul>
				        <ul class="nav navbar-nav navbar-right">
				            <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{ trans('message.Sign up') }}</a></li>
				            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> {{ trans('message.Login') }}</a></li>
				        </ul>
				    </div>
				</div>
			</nav>
			  
			@yield('content')
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>
