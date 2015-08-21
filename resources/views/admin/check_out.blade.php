@extends('layouts.admin')

@section('page')
<div id="page" class="container clearfix">	
	<div class="container">
		<h1 class="page-header">Manage Check Outs</h1>
		<div class="row">
			<?php $contacts = DB::table('contacts')->get(); ?>
			<h2>Create New Check Out</h2>
			<div class="col-xs-12 col-md-4">
				<form class="form" id="checkOutForm">
					<div class="form-group">
						<label for="title">Title : </label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Title" onkeyup="refresh_check_jumbo();" />
					</div>
					<div class="form-group">
						<label for="contact">Contact : </label>
						<select class="form-control" id="contact" name="contact">
							@foreach($contacts as $contact)
							<option value={{ $contact->id }}>{{ $contact->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="content"><small>(HTML)</small> Content : </label>
						<textarea rows="10" class="col-xs-12 form-control" name="content" id="content" onkeyup="refresh_check_jumbo();"></textarea>
					</div>
				</form>
				<button type="submit" class="btn btn-info" data-loading-text="Submitting ..." style="margin-top: 15px;" id="checkOutValid" onclick="submit_new_check_out();">Create</button>
			</div>
			<div class="col-xs-12 col-md-8">
				<br /><br /><br /><br />
				<div class="well">
					<div class="jumbotron text-justify" id="exempleJumbo">
						<h2 class="check-header" style="padding-bottom: 20px; border-bottom: 1px solid #aaa; font-size: 36px;"></h2>
						<br />
						<div class="check-content"></div>
						<br />
						<p class="text-right"><a href="#" class="btn btn-info btn-lg" role="button"><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;Contact</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h2>Edit&nbsp;&#124;&nbsp;Remove Check Outs</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<td>Title</td>
						<td class="col-xs-6">Content</td>
						<td>Seen</td>
						<td>E&nbsp;&#124;&nbsp;D</td>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			<script type="text/javascript">refresh_check_outs()</script>
		</div>
	</div>
</div>
<div class="modal fade" id="modalCheckOut" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Edit Check Out</h4>
			</div>
			<div class="modal-body">
				<form class="form" id="modalCheckOutForm">
					<input type="hidden" id="id" name="id" />
					<div class="form-group">
						<label for="title">Title : </label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Title" />
					</div>
					<div class="form-group">
						<label for="html">Content : </label>
						<textarea rows="5" class="form-control" id="html" name="html"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="modalCheckOutValid">Apply</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop