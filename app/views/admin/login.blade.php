@extends('layouts.admin')

@section('page')
<div id="page" class="container clearfix">	
	<div class="container">
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			{{ Form::open(array('url' => 'login', 'class' => 'form')) }}
			<legend><h1>Login</h1></legend>
			<br />
			<?php
			if (Session::has('msg'))
				echo '<div class="alert '.(Session::get('msg') === 'Login Succeed' ? 'alert-success' : 'alert-danger').'">'.Session::get('msg').'</div>';
			?>
			<div class="form-group row">
				{{ Form::label('username', 'Username : ') }}
				<br />
				{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'required' => true)) }}
			</div>
			<br />
			<div class="form-group row">
				{{ Form::label('password', 'Password : ') }}
				<br />
				{{ Form::password('password', array('class' => 'form-control', 'required' => true)) }}
			</div>
			<br />
			<p>{{ Form::submit('Log Me !', array('class' => 'btn btn-primary')) }}</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop