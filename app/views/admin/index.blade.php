@extends('layouts.admin')

@section('page')
<div id="page" class="container clearfix">	
	<div class="container">
		<h1>Admin Section</h1>
		<?php
		$sections = array('Contacts' => array('url' => URL::to('admin/contacts'), 'icon' => 'user'),'Check Outs' => array('url' => URL::to('admin/check_out'), 'icon' => 'lock'), 'Golden Book' => array('url' => URL::to('admin/golden_book'), 'icon' => 'book'), 'Exp & Skills' => array('url' => URL::to('admin/exp_skls'), 'icon' => 'dashboard'));
		?>
		<div class="row">
			@foreach ($sections as $name => $array)
			<div class="col-xs-6 col-sm-4 col-md-3">
				<a href="{{{ $array['url'] }}}" class="adm-items">
					<p class="lead">{{{ $name }}}</p>
					<span class="glyphicon glyphicon-{{{ $array['icon'] }}}"></span>
				</a>
			</div>			
			@endforeach
		</div>
	</div>
</div>
@stop