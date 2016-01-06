@extends('layouts.admin')

@section('header')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Check analytics for the last 30 days</small>
	</h1>
</section>
@endsection

@section('content')
<div class="row">
	@if ($analytics !== null)
	<div class="col-md-4">
		<div class="info-box">
			<!-- Apply any bg-* class to to the icon to color it -->
			<span class="info-box-icon bg-red"><i class="fa fa-binoculars"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Page Views</span>
				<span class="info-box-number">{{$analytics["visitors"]->sum('pageViews')}}</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div>

	<div class="col-md-4">
		<div class="info-box">
			<!-- Apply any bg-* class to to the icon to color it -->
			<span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Visitors</span>
				<span class="info-box-number">{{$analytics["visitors"]->sum('visitors')}}</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div>
	@endif

	<div class="col-md-4">
		<div class="info-box">
			<!-- Apply any bg-* class to to the icon to color it -->
			<span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Mails</span>
				<span class="info-box-number">{{$emailCount}}</span>
				<div class="progress">
					<div class="progress-bar bg-aqua" style="width: 100%"></div>
				</div>
				<span class="progress-description">
					From the beginning
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div>
</div><!-- /.row -->

<div class="row">
	<div class="col-md-12">
		<!-- Box -->
		<div class="box box-solid box-{{$analytics["visitors"]->sum('pageViews') > 200 ? 'success' : 'warning'}}">
			<div class="box-header with-border">
				<h3 class="box-title">Page Views</h3>
			</div>
			<div class="box-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Url</th>
							<th># Views</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($analytics['pages'] as $page)
						<tr>
							<th>
								<a href="{{$page['url']}}">
									{{$page['url']}}
								</a>
							</th>
							<td>{{$page['pageViews']}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div>
</div>
@endsection
