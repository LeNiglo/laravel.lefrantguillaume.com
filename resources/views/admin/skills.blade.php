@extends('layouts.admin')

@section('header')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		My Skills
		<small>What do I know ?</small>
	</h1>
</section>
@endsection

@section('content')
<div class='row'>
	<div class='col-md-12'>
		<!-- Box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Skills</h3>
			</div>
			<div class="box-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Progress</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($skills as $skill)
						<tr>
							<td class="skill-name">{{$skill->name}}</td>
							<td class="skill-progress">{{$skill->progress}} %</td>
							<td>
								<a href="#" class="update-skill" data-id="{{$skill->id}}" title="Edit">
									<i class="fa fa-pencil text-olive"></i>
								</a>
								&nbsp;
								<a href="#" class="delete-skill" data-id="{{$skill->id}}" title="Delete">
									<i class="fa fa-trash-o text-red"></i>
								</a>
							</td>
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
				<h3 class="box-title">Add Skill</h3>
			</div>
			<div class="box-body">
				<form id="form-skill" action="{{ route('admin::forms::manageSkill') }}" method="POST" role="form">
					{!! csrf_field() !!}
					<input type="hidden" name="id" id="id" value="" />
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" />
					</div>

					<div class="form-group">
						<label for="progress">Progress</label>
						<input type="number" name="progress" id="progress" min="0" max="100" step="1" class="form-control" value="{{old('progress')}}" />
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->
@endsection
