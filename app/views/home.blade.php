@extends('layouts.main')

@section('page')
<div id="page" class="container clearfix">	
	<div class="container">
		<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
	</div>
	<p>Check out my <a href="{{{ URL::to('cv') }}}">Curriculum Vitae</a></p>
	<br />
</div>
@stop