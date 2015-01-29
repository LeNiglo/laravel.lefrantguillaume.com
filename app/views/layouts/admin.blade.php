<?php
function admin_nav_link($link, $name) {
	echo '<a href="'.URL::to($link).'"';
	if (Request::path() == $link)
		echo ' class="active"';
	echo '>'.$name.'</a>';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/transit.min.js"></script>
	<script src="/js/admin.js"></script>
</head>
<body class="text-center" style="padding-top: 70px;">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ URL::to('admin') }}">Admin Panel</a>
				<a class="navbar-brand glyphicon glyphicon-off" href="{{ URL::to('logout') }}"></a>
				<a class="navbar-brand glyphicon glyphicon-home" href="{{ URL::to('/') }}"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><?php admin_nav_link('admin/contacts', 'Contacts'); ?></li>
					<li><?php admin_nav_link('admin/check_out', 'Check Out'); ?></li>
					<li><?php admin_nav_link('admin/golden_book', 'Golden Book'); ?></li>
					<li><?php admin_nav_link('admin/exp_skls', 'Experiences & Skills'); ?></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	@yield('page')
</body>
</html>