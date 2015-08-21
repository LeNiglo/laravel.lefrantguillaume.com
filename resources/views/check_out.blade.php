@extends('layouts.main')

<?php

function printTitle($model) {
	$now = time();
	$crea = strtotime($model->created_at);
	$days = (($now - $crea) / 86400);
	if ((2.0 * $model->seen) / $days > 1)
		echo '<i class="pull-right glyphicon glyphicon-heart"></i>&nbsp;&nbsp;';
	echo $model->title;
	if ($days <= 15)
		echo ' <span class="label label-info">New</span>';
	return true;
}

?>

@section('page')
<div id="page" class="container clearfix">
	<?php $checks = DB::table('check_out')->get(); ?>
	@foreach ($checks as $checkOut)
	<br />
	<div class="jumbotron text-justify">
		<h2 class="check-header"><?php printTitle($checkOut); ?></h2>
		<br />
		<div class="checkOutContent">
			{{ $checkOut->html }}
		</div>
		<br />
		<p class="text-right"><a class="btn btn-info btn-lg check_out_seen" data-id="{{{ $checkOut->id }}}" data-redirect="/contact?to={{{ $checkOut->contact_id }}}&orig={{{ $checkOut->id }}}" role="button"><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;Contact</a></p>
	</div>
	@endforeach
</div>
@stop