@extends('layouts.admin')

@section('header')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{$email->subject}}
		<small>{{$email->from}} <a href="mailto:{{$email->email}}">&lt;{{$email->email}}&gt;</a></small>
	</h1>
</section>
@endsection

@section('content')
<div class='row'>

	<div class='col-md-12'>
		<!-- Box -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">{{$email->subject}} <small>{{$email->updated_at->diffForHumans()}}</small></h3>
			</div>
			<div class="box-body">
				<div style="width:600px;margin:auto"><pre>{{$email->body}}</pre></div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->

</div><!-- /.row -->
@endsection
