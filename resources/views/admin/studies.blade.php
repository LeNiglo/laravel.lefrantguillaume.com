@extends('layouts.admin')

@section('header')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		My Studies
		<small>Where is my Childhood ?</small>
	</h1>
</section>
@endsection

@section('content')
<div class='row'>
	<div class='col-md-12'>
		<!-- Box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Studies</h3>
			</div>
			<div class="box-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Year</th>
							<th>School</th>
							<th>Title</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($studies as $study)
						<tr>
							<td class="study-year">{{$study->year}}</td>
							<td class="study-school">{{$study->school}}</td>
							<td class="study-title">{{$study->title}}</td>
							<th>
								<a href="#" class="update-study" data-id="{{$study->id}}" title="Edit">
									<i class="fa fa-pencil text-olive"></i>
								</a>
								&nbsp;
								<a href="#" class="delete-study" data-id="{{$study->id}}" title="Delete">
									<i class="fa fa-trash-o text-red"></i>
								</a>
							</th>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->

<div class='row'>
	<div class='col-md-12'>
		<!-- Box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Add Study</h3>
			</div>
			<div class="box-body">
				<form id="form-study" action="{{ route('admin::forms::manageStudy') }}" method="POST" role="form">
					{!! csrf_field() !!}
					<input type="hidden" name="id" id="id" value="" />
					<div class="form-group">
						<label for="year">Year</label>
						<input type="text" name="year" id="year" class="form-control" value="{{old('year')}}" />
					</div>
					<div class="form-group">
						<label for="school">School</label>
						<input type="text" name="school" id="school" class="form-control" value="{{old('school')}}"/>
					</div>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" />
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->
@endsection
