@extends('layouts.main')

@section('page')
<?php

$contacts = DB::table('contacts')->orderBy('contacted', 'desc')->get();

function print_option($contact, $input) {
	$selected = false;
	if ($input == $contact->id)
		$selected = true;

	return '<option value=\''.json_encode(array('name' => $contact->name, 'email' => $contact->email)).'\' style="color: '.$contact->color.';"'.($selected ? ' selected' : '').'>'.$contact->name.'</option>';
};

?>
<div id="page" class="container clearfix">
	<div class="row">
		<form class="form col-xs-12 col-md-6" id="contactForm">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<fieldset>
				<legend>Please, Fill the form.</legend>
				<div class="form-group col-xs-12">
					<label for="to">To : </label>
					<select class="form-control" id="to" name="to">
						@foreach($contacts as $contact)
						{!! print_option($contact, Input::get('to')) !!}
						@endforeach
					</select>
				</div>
				<div class="form-group col-xs-6">
					<label for="from">From : </label>
					<input type="text" class="form-control" id="from" name="from" placeholder="From" />
				</div>
				<div class="form-group col-xs-6">
					<label for="email">eMail : </label>
					<input type="email" class="form-control" id="email" name="email" placeholder="eMail" />
				</div>
				<div class="form-group col-xs-12">
					<label for="subject">Subject : </label>
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" />
				</div>
				<div class="form-group col-xs-12">
					<label for="body">Message : </label>
					<textarea type="text" class="form-control" style="resize: vertical;" rows="6" id="body" name="body" placeholder="Message ..."></textarea>
				</div>
				<button type="submit" class="btn btn-info" data-loading-text="Sending ..." data-complete-text="Sent !">Send Mail</button>
			</fieldset>
		</form>
		<div class="col-md-6 hidden-xs hidden-sm">
			<img id="send_mail_icon" class="img-responsive" src="/img/icons/send_mail.png" alt="contact me" />
		</div>
	</div>
	<div class="row">
		<small>Already used {{{ DB::table('contacts')->sum('contacted') }}} times.</small>
	</div>
</div>
@stop
