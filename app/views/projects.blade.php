@extends('layouts.main')

@section('page')
<div id="page" class="container clearfix">	
	<div class="container">
		<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Zappy</div>
		<div class="panel-body">
			<div class="col-xs-12 col-md-6 pull-left">
				<div id="carousel_zappy" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel_zappy" data-slide-to="0" class="active"></li>
						<li data-target="#carousel_zappy" data-slide-to="1" class=""></li>
						<li data-target="#carousel_zappy" data-slide-to="3" class=""></li>
						<li data-target="#carousel_zappy" data-slide-to="4" class=""></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img class="slide-image" src="img/projects/zappy_1.png" alt="">
						</div>
						<div class="item">
							<img class="slide-image" src="img/projects/zappy_3.png" alt="">
						</div>
						<div class="item">
							<img class="slide-image" src="img/projects/zappy_4.png" alt="">
						</div>
						<div class="item">
							<img class="slide-image" src="img/projects/zappy_5.png" alt="">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel_zappy" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel_zappy" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<br />
			<p style="font-size: 16px;">
				This project is a Life Simulator. Basically, the goal was to manipulate data, process, through network and adding our first Artificial Intelligence.<br />
				Afterwards, we wrote down a little scenario and a universe. Then, we created the server in <strong>C</strong>, our World, Trantor. After that, we had to populate this world and the AI part is here for that. Wrote in <strong>Lua / C</strong>, it's our "Trantorien" see what was going on this world. We finally created a display in <strong>C++ / SFML</strong> to see what was happening on Trantor. Here we implemented our scenario : Conquete of the space. You are the commander of a starship and your goal is to discover new worlds to analyse local population. With some good visual effects and features (multiserver, options, mini-game, progression, ...) this part is clearly the best one.<br />
				Thanks to this, we ranked a nice 26 / 20  :3
			</p>
			<p>
				Here is our <a href="http://prezi.com/7hteya5wo0ki/present/?auth_key=e4u1te9&follow=2_iruilvhnvh" target="_blank">Prezi</a> for the Final Defense.
			</p>
		</div>
	</div>
</div>
@stop