@extends('layouts.main')

@section('page')
<div id="page" class="container clearfix">
	<div class="col-xs-3 bording pull-left">
		<img class="img-responsive" src="/img/languages.png" alt="coding languages" />
		<img class="img-responsive" src="/img/animes.png" alt="animes" />
		<img class="img-responsive" src="/img/lordi.png" alt="Lordi - The Arockalypse" />
	</div>
	<div class="col-xs-6 text-justify img-center">
		<p class="lead text-center">Who am I ?</p>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>I</big>'m a third year student at EPITECH Bordeaux in France.<br />
			As a lot of my mates, I love programming and gaming.
		</p>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>F</big>or the programming part, I love to conceive video games, especially arcade and platform ones. I love to imagine and write down screenplays and, as a gamer, to think about what the user will be able to do or not to do. I love to create, shape, develop my idea to see it growing and become a real thing.
		</p>
		<br />
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>F</big>or the gaming part, I love to play challenging games. I played for a long time <a href="http://www.callofduty.com/" target="_blank"><strong>Call Of Duty</strong></a> (5, 6, 7) at a national level, then I moved to <a href="http://euw.leagueoflegends.com/" target="_blank"><strong>League Of Legends</strong></a> and <a href="https://osu.ppy.sh" target="_blank"><strong>Osu!</strong></a> and these days, I'm playing <a href="http://www.wakfu.com/en/mmorpg" target="_blank"><strong>Wakfu</strong></a>. When I play, I love to be good at what I'm doing. This reflects my all day personnality.
		</p>
		<br />
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>I</big> also love japanese culture. I'm a big fan of animes. I watched a lot of various animes. I can listen to the OV anime without looking at subtitles. ( *kinda proud* )</br /> 
			Sadly, I have less time this year to watch more of them ...
		</p>
		<br />
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>I</big> had the chance to travel quite a lot when I was younger with my parents. I traveled in a lot of destinations. Basically, France and European capitals, but not just that.<br />
			I had the chance to travel to London, Madrid, Amsterdam, Legoland (Deutshland), Paris and, for the rest of the country, from South to North, Corse, Pyrénées, Landes, Bordeaux, Alpes, Charente, ... I'm not even at the middle !<br />
			For further trips, I went to Réunion island, the Canaries, Sint Maarten.
		</p>
		<br />
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>A</big>nd some music ?<br />
			Well ... Yes. I like it a lot ! It helps me to focus on what I'm doing. I'm not very awkward on the type. I really like Metal and Hard Rock (big fan of <a href="http://www.lordi.fi/" target="_blank"><strong>Lordi</strong></a>). I also listen japanese songs (animes' opening, ...) when I need just background music. (<a href="http://youtu.be/L6901cTUBxE" target="_blank"><strong>Example</strong></a>). Sometimes some comercial music like David Guetta, Usher, Simple Plan, Maroon5, ...
		</p>
	</div>
	<div class="col-xs-3 bording pull-right">
		<img class="img-responsive" src="/favicon.ico" alt="Nope." style="transform: scale(0, 0);" />
		<img class="img-responsive" src="/img/gamer.png" alt="I'm a gamer." />
		<img class="img-responsive" src="/img/lareunion.png" alt="reunion island" />
		<img class="img-responsive" src="/img/epitech.png" alt="Epitech School" />
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
		<p class ="lead text-center">Still reading ?</p>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>A</big>fter that, if you are interested into my IT Skills, you can check my Curricula Vitae right bellow :
		</p>
		<ul style="list-style-type: none;">
			<li><a href="{{{ URL::to('cv') }}}">Interactive Web format</a> (up-to-date)</li>
		</ul>
		<br />
		<p class="lead text-center">Anything Else ?</p>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;<big>I</big>f you are interested in anything else, or if you just want to contact me, or report me an error, you can contact me <a href="{{{ URL::to('contact') }}}">here</a>.
		</p>
		</div>
	</div>
	<div class="row text-center">
		<iframe width="1280" height="720" src="https://www.youtube.com/embed/lAIGb1lfpBw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
@stop
