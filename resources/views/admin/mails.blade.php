@extends('layouts.admin')

@section('header')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		My Mails
		<small>Who wants to talk ?</small>
	</h1>
</section>
@endsection

@section('content')
<div class='row'>

	<div class='col-md-12'>
		<!-- Box -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">You have {{count($emails)}} message(s)</h3>
			</div>
			<div class="box-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Sender</th>
							<th>Subject</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($emails as $email)
						<tr>
							<th>{{$email->from}} &lt;{{$email->email}}&gt;</th>
							<td><a href="{{ route('admin::mail', ['id' => $email->id]) }}">{{$email->subject}}</a></td>
							<td>{{$email->created_at->diffForHumans()}}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3">
								{!! $emails->render() !!}
							</td>
						</tr>
					</tfoot>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->

</div><!-- /.row -->
@endsection
