@extends('layouts.main')

@section('endhead')
<link rel="stylesheet" type="text/css" href="{{ asset('js/sliderPro/css/slider-pro.min.css') }}" />
<script type="text/javascript" src="{{ asset('js/sliderPro/js/jquery.sliderPro.min.js') }}"></script>
@stop

@section('page')
<div id="page" class="container clearfix">
	<div class="panel panel-default">
		<div class="panel-heading">Zappy</div>
		<div class="panel-body">
			<div class="col-xs-12 col-md-12 pull-left">

				<div class="slider-pro">
					<div class="sp-slides">
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/zappy_1.png') }}"
							data-src="{{ asset('img/projects/zappy_1.png') }}"
							data-retina="{{ asset('img/projects/zappy_1.png') }}"/>

							<div class="sp-caption">Welcome on Board, Commander</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/zappy_3.png') }}"
							data-src="{{ asset('img/projects/zappy_3.png') }}"
							data-retina="{{ asset('img/projects/zappy_3.png') }}"/>

							<div class="sp-caption">Collecting Ressources</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/zappy_4.png') }}"
							data-src="{{ asset('img/projects/zappy_4.png') }}"
							data-retina="{{ asset('img/projects/zappy_4.png') }}"/>

							<div class="sp-caption">Level up</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/zappy_5.png') }}"
							data-src="{{ asset('img/projects/zappy_5.png') }}"
							data-retina="{{ asset('img/projects/zappy_5.png') }}"/>

							<div class="sp-caption">Have a talk</div>
						</div>
					</div>


				</div>
			</div>

			<br />
			<p style="font-size: 16px;">
				This project is a Life Simulator. Basically, the goal was to manipulate data, process, through network and adding our first Artificial Intelligence.<br />
				Afterwards, we wrote down a little scenario and a universe. Then, we created the server in <strong>C</strong>, our World, Trantor. After that, we had to populate this world and the AI part is here for that. Wrote in <strong>Lua / C</strong>, it's our "Trantorien" see what was going on this world. We finally created a display in <strong>C++ / SFML</strong> to see what was happening on Trantor. Here we implemented our scenario : Conquete of the space. You are the commander of a starship and your goal is to discover new worlds to analyse local population. With some good visual effects and features (multiserver, options, mini-game, progression, ...) this part is clearly the best one.<br />
				Thanks to this, we ranked a nice <em>26 / 20</em> !
			</p>
			<p>
				<small>
					Here is our <a href="http://prezi.com/7hteya5wo0ki/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank">Prezi</a> for the Final Defense.
				</small>
			</p>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Nibbler</div>
		<div class="panel-body">
			<div class="col-xs-12 col-md-12 pull-left">

				<div class="slider-pro">
					<div class="sp-slides">
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/nibbler_1.png') }}"
							data-src="{{ asset('img/projects/nibbler_1.png') }}"
							data-retina="{{ asset('img/projects/nibbler_1.png') }}"/>

							<div class="sp-caption">SFML Interface</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/nibbler_2.png') }}"
							data-src="{{ asset('img/projects/nibbler_2.png') }}"
							data-retina="{{ asset('img/projects/nibbler_2.png') }}"/>

							<div class="sp-caption">SDL using images</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/nibbler_3.png') }}"
							data-src="{{ asset('img/projects/nibbler_3.png') }}"
							data-retina="{{ asset('img/projects/nibbler_3.png') }}"/>

							<div class="sp-caption">XLIB using my drawing method</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="{{ asset('img/projects/nibbler_4.png') }}"
							data-src="{{ asset('img/projects/nibbler_4.png') }}"
							data-retina="{{ asset('img/projects/nibbler_4.png') }}"/>

							<div class="sp-caption">OpenGL using color blocks</div>
						</div>
					</div>


				</div>
			</div>

			<br />
			<p style="font-size: 16px;">
				Everyone knows the Snake game. A concept used and abused : phone, calculators, consoles, ...<br />
				Well, Epitech has also his own snake contest !<br />
				The only constraint was to build it in C++ using 3 different graphical librairies and, of course, we did it !  :)<br />
				We used :
				<ol class="text-left" style="padding: 7px 10%;">
					<li>SDL, a basic C graphical library we all knew. It was not a big deal to develop our snake and make fun features.</li>
					<li>XLIB, the most low level graphical library you can use. I created a cool ascii art interface in which your can draw in a file with characters (ascii art) and the game interprets the file and draw your ascii invention on screen !</li>
					<li>OpenGL, a high level library used all around the world. We keep it simple with this one, as it was a real pain to use knowing nothing and in the short delay we had. We did a good looking 8bit Snake.</li>
					<li>SFML, the equivalent of the SDL for C++, with more features. I created an interface to launch the game after selecting the options the user wants (library, size, bonus, arrows, difficulty).</li>
				</ol>
				We successfully achieve the first rank of our promotion with an awesome 28,5 / 20 thanks to the huge amount of bonus we did. It was a really nice project to do, very interesting and technical but still fun !
			</p>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Raytracer</div>
		<div class="panel-body">
			<div class="col-xs-12 col-md-12 pull-left">
				<img src="{{ asset('img/projects/raytracer.png') }}" style="max-height: 500px; margin: auto;" class="img-responsive" />
			</div>

			<br />
			<p style="font-size: 16px;">
			Generating images with a computer is now common but who knows how it is done ? I can say I do !<br />
			Our end of first year project was nothing more than to create a picture generator in C ! Awesome, right ?  :)<br />
			I think it was one of the hardest project I had to face at Epitech. But look at the result ! How nice it is ? This is generated using only C and XML files !<br />
			It was our first "huge group" project, with a team of 7 people per group. I did a huge amount of maths because this is a lot of calcul and advanced geometrical formulas.<br />
			We did a nice technical job but failed hard during the demo ! Too bad ... we still got a 17 / 20 and a good commentary on the final visual.
			</p>
		</div>
	</div>
	<div class="panel panel-success">
		<div class="panel-heading">Animelist</div>
		<div class="panel-body">
			<div class="col-xs-12 col-md-12 pull-left">
				<img src="{{ asset('img/projects/animelist.png') }}" style="max-height: 500px; margin: auto;" class="img-responsive" />
			</div>

			<br />
			<p style="font-size: 16px;">

			</p>
		</div>
	</div>
	<script type="text/javascript">
		(function initSP() {
			if ($('.slider-pro:visible .sp-slide').length > 1)
				$('.slider-pro:visible').sliderPro({
					width: '90%',
					height: 600,
					orientation: 'horizontal',
					loop: true,
					arrows: true,
					buttons: false,
				});
		})();

	</script>
</div>
@stop
