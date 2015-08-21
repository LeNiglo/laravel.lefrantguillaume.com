<html>
<head>
	<title>Lefrant Guillaume</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">

	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<style>
		body {
			background-color: #eee;
			background-image: url('/img/background.jpg');
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #eee;
			display: table;
			font-weight: 100;
			font-family: 'Lato', 'Helvetica Neue', Verdana, Helvetica, Arial, sans-serif;
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 96px;
			margin-bottom: 40px;
			font-family: Helvetica;
		}

		.links ul {
			margin: 0;
			padding: 0;
			list-style-type: none;
		}

		.links ul > li {
			font-size: 22px;
			padding: 5px;
			display: inline;
		}

		a,
		a:visited {
			color: white;
			text-decoration: none;
		}

		a:hover,
		a:active {
			color: #ddd;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="title">Lefrant Guillaume</div>
			<div class="links">
				<ul>
					<li><a href="{{{ URL::to('cv') }}}">Interactive CV</a></li>
					<li><a href="{{{ URL::to('projects') }}}">Projects</a></li>
					<li><a href="{{{ URL::to('contact') }}}">Contact</a></li>
				</ul>
			</div>
			<div style="margin: 20px auto; width: 400px;">
				@include('social-bar', array('height' => '32'))
			</div>
		</div>
	</div>
</body>
</html>
