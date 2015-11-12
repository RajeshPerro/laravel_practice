<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel Project</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">--}}

	{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>--}}
	{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
	{{--{{ HTML::script('js/raejesh.js') }}--}}
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="<?php echo asset('assets/js/raejesh.js')?>"></script>
	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			display: table;
			font-weight: 100;
			font-family: 'Raleway';
		}
		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 96px;
		}

		button .fa {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
	</style>

	<script>
		$(function () {
			$('#task-name').focus();
		});
	</script>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<center>
					<a class="navbar-brand" href="/">Home</a>
					<a class="navbar-brand" href="/about">About</a>
					<a class="navbar-brand" href="/contact">Contact</a>
					<a class="navbar-brand" href="/task">Task</a>
					</center>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>
				</div>
			</div>
		</nav>
	</div>

	@yield('content')
</body>
</html>
