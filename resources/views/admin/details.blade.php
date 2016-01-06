@extends('layouts.admin')

@section('header')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		My Details
		<small>Check my infos</small>
	</h1>
</section>
@endsection

@section('content')
<div class='row'>
	<div class='col-md-6'>
		<!-- Box -->
		<div class="box box-warning">
			<div class="box-header with-border">
				<h3 class="box-title">eMails</h3>
			</div>
			<div class="box-body">
				<form action="{{ route('admin::forms::changeEmail') }}" method="POST" role="form">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="email">Primary (can't be changed)</label>
						<input type="email" name="email" id="email" class="form-control" value="{{$me->email}}" disabled="disabled" />
					</div>
					<div class="form-group">
						<label for="email2">Secondary</label>
						<input type="email" name="email2" id="email2" class="form-control" value="{{(null !== old('email2')) ? old('email2') : $me->email2}}"/>
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="tel" name="phone" id="phone" class="form-control" value="{{(null !== old('phone')) ? old('phone') : $me->phone}}" />
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->

	<div class='col-md-6'>
		<!-- Box -->
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Password</h3>
			</div>
			<div class="box-body">
				<form action="{{ route('admin::forms::changePassword') }}" method="POST" role="form">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="old">Old Password</label>
						<input type="password" name="old" id="old" class="form-control" />
					</div>
					<div class="form-group">
						<label for="new">New Password</label>
						<input type="password" name="new" id="new" class="form-control" />
					</div>
					<div class="form-group">
						<label for="new2">Confirmation</label>
						<input type="password" name="new2" id="new2" class="form-control" />
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->

	<div class='col-md-12'>
		<!-- Box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Address</h3>
			</div>
			<div class="box-body">
				<form action="{{ route('admin::forms::changeAddress') }}" method="POST" role="form">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="addr1">Line 1</label>
						<input type="text" name="addr1" id="addr1" class="form-control" value="{{(null !== old('addr1')) ? old('addr1') : $me->addr1}}" />
					</div>
					<div class="form-group">
						<label for="addr2">Line 2</label>
						<input type="text" name="addr2" id="addr2" class="form-control" value="{{(null !== old('addr2')) ? old('addr2') : $me->addr2}}" />
					</div>
					<div class="form-group">
						<label for="addr3">Line 3</label>
						<input type="text" name="addr3" id="addr3" class="form-control" value="{{(null !== old('addr3')) ? old('addr3') : $me->addr3}}" />
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->

</div><!-- /.row -->
@endsection
