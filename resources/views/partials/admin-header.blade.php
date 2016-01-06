<!-- Main Header -->
<header class="main-header">

	<!-- Logo -->
	<a href="{{ route('admin::dashboard') }}" class="logo">
		<span class="logo-mini"><b>L</b>G</span>
		<span class="logo-lg"><b>Lefrant</b>Guillaume</span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		@if (Auth::check())
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		@endif
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				@if (Auth::check())
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-users"></i>
						<span class="label label-success">{{count($users)}}</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">There is {{count($users)}} user(s) registered.</li>
						@foreach ($users as $user)
						<li>
							<ul class="menu">
								<li>
									<a href="#">
										<div class="pull-left">
											<!-- User Image -->
											<img src="https://s.gravatar.com/avatar/{{md5($user->email)}}?s=64" class="img-circle" alt="User Image" />
										</div>
										<h4>
											{{$user->name}}
											<small><i class="fa fa-clock-o"></i> {{$user->updated_at->diffForHumans()}}</small>
										</h4>
										<p>{{$user->email}}</p>
									</a>
								</li>
							</ul>
						</li>
						@endforeach
					</ul>
				</li>
				<!-- /.messages-menu -->

				<!-- Notifications Menu -->
				<li class="dropdown messages-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-warning">{{$emailCount}}</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have {{$emailCount}} message(s)</li>
						<li>
							<!-- inner menu: contains the messages -->
							<ul class="menu">
								@foreach ($emails as $email)
								<li><!-- start message -->
									<a href="{{ route('admin::mail', ['id' => $email->id]) }}">
										<!-- Message title and timestamp -->
										<div class="pull-left">
											<!-- User Image -->
											<img src="https://s.gravatar.com/avatar/{{md5($email->email)}}?s=160" class="img-circle" alt="User Image" />
										</div>
										<h4>
											{{$email->from}}
											<small><i class="fa fa-clock-o"></i> {{$email->updated_at->diffForHumans()}}</small>
										</h4>
										<!-- The message -->
										<p>{{$email->subject}}</p>
									</a>
								</li>
								<!-- end message -->
								@endforeach

							</ul>
							<!-- /.menu -->
						</li>
						<li class="footer">
							<a href="{{ route('admin::mails') }}">See all Messages</a>
						</li>
					</ul>
				</li>
				@else
				<li>
					<a href="{{ route('login') }}">Login</a>
				</li>
				<li>
					<a href="{{ route('register') }}">Register</a>
				</li>
				@endif
				<li>
					<a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>
@if (Auth::check())
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="https://s.gravatar.com/avatar/{{md5($me->email)}}?s=160" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>{{$me->name}}</p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- search form (Optional) -->
		<form action="" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header">SECTIONS</li>
			<!-- Optionally, you can add icons to the links -->
			<li class="{{ isActiveRoute('admin::dashboard') }}"><a href="{{ route('admin::dashboard') }}"><i class="fa fa-bar-chart-o"></i> <span>Dashboard</span></a></li>
			<li class="{{ isActiveRoute('admin::details') }}"><a href="{{ route('admin::details') }}"><i class="fa fa-cogs"></i> <span>My Details</span></a></li>
			<li class="{{ isActiveRoute('admin::studies') }}"><a href="{{ route('admin::studies') }}"><i class="fa fa-graduation-cap"></i> <span>My Studies</span></a></li>
			<li class="{{ isActiveRoute('admin::skills') }}"><a href="{{ route('admin::skills') }}"><i class="fa fa-code"></i> <span>My Skills</span></a></li>
			<li class="{{ isActiveRoute('admin::experiences') }}"><a href="{{ route('admin::experiences') }}"><i class="fa fa-building"></i> <span>My Working Experiences</span></a></li>
			<!--<li class="treeview">
				<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Link in level 2</a></li>
					<li><a href="#">Link in level 2</a></li>
				</ul>
			</li>-->
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
@endif
