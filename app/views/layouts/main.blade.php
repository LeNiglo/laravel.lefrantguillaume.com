<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{{ $pageName }}} | Lefrant Guillaume</title>
	<link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/transit.min.js"></script>
	<script src="/js/doc.js"></script>
	<script src="/js/ajax.js"></script>
</head>
<body class="text-center">
	<div id="header">
		<nav class="col-xs-12 navbar" role="navigation">
			<ul class="list-inline">
				<li><a href="/"> Home </a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> About Me <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" style="background: none; box-shadow: none; border: none;">
						<li><a href="{{{ URL::to('about_me') }}}">My Life</a></li>
						<li class="divider"></li>
						<li><a href="{{{ URL::to('cv') }}}">Interactiv CV</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projects <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" style="background: none; box-shadow: none; border: none;">
						<li><a href="{{{ URL::to('projects') }}}">School</a></li>
						<li><a href="{{{ URL::to('projects') }}}">Personnal</a></li>
						<li><a href="{{{ URL::to('projects') }}}">Work</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Contact <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" style="background: none; box-shadow: none; border: none;">
						<li><a href="{{{ URL::to('contact') }}}">Mail</a></li>
						<li class="divider"></li>
						<li><a href="{{{ URL::to('golden') }}}">Golden Book</a></li>
					</ul>
				</li>
				<li><a href="{{{ URL::to('check_out') }}}">Check Out</a></li>
			</ul>
		</nav>
		<div class="page-header col-xs-12">
			<h1 style="font-family: LoLFont sans-serif; font-size: 50px;">Lefrant Guillaume <small> &mdash; {{{ $pageName }}}</small></h1>
		</div>
	</div>
	@yield('page')
	<div id="footer" class="container">
		<div class="pull-left">
			@include('social-bar', array('height' => '24'))
		</div>
		<span class="col-xs-12 col-sm-12 col-md-4 text-right pull-right" style="line-height: 24px; font-family: LoLFont Arial sans-serif;">
			__&nbsp;&nbsp;&nbsp;&nbsp;<em>Made by Guillaume LEFRANT.</em>&nbsp;&nbsp;&nbsp;&nbsp;__
		</span>
	</div>
</body>
</html>