@extends('layouts.admin')

@section('page')
<div id="page" class="container clearfix">	
	<div class="container">
		<h1 class="page-header">Manage Contacts</h1>
		<div class="row">
			<h2>Create New Contact</h2>
			<form class="form" id="contactForm">
				<div class="form-group">
					<label for="name">Name : </label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" />
				</div>
				<div class="form-group">
					<label for="email">eMail : </label>
					<input type="email" class="form-control" id="email" name="email" placeholder="eMail" />
				</div>
				<a onclick="submit_new_contact();" title="submit"><span class="glyphicon glyphicon-ok"></span></a>&nbsp;&nbsp;
				<a onclick="$('#contactForm').trigger('reset');" title="reset"><span class="glyphicon glyphicon-asterisk"></span></a>
			</form>
		</div>
		<br />
		<div class="row">
			<h2>Edit&nbsp;&#124;&nbsp;Remove Contacts</h2>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<td>Name</td>
						<td>eMail</td>
						<td>Color</td>
						<td>E&nbsp;&#124;&nbsp;D</td>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			<script type="text/javascript">refresh_contacts()</script>
		</div>
	</div>
</div>
<div class="modal fade" id="modalContact" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Edit Contact</h4>
			</div>
			<div class="modal-body">
				<form class="form" id="modalContactForm">
					<input type="hidden" id="id" name="id" />
					<div class="form-group">
						<label for="name">Name : </label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" />
					</div>
					<div class="form-group">
						<label for="email">eMail : </label>
						<input type="email" class="form-control" id="email" name="email" placeholder="eMail" />
					</div>
					<div class="form-group">
						<label for="color"><small>(valid CSS)</small> Color : </label>
						<input type="text" class="form-control" id="color" name="color" placeholder="Color" />
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="modalContactValid">Apply</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop