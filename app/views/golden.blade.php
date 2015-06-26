@extends('layouts.main')

@section('page')
<div id="page" class="container clearfix">	
	<div class="row" style=" padding: 20px; border-bottom: 1px solid #5bc0de;">
		<div id="showForm">
			<a class="btn btn-default col-xs-6 col-xs-offset-3">Write Mine</a>
		</div>
		<div id="hiddenForm" style="display: none;">
			<a class="btn btn-default col-xs-6 col-xs-offset-3">Maybe later</a>
			<br /><br /><br />
			<div class="row">
				{{ Form::open(array('class' => 'form col-xs-12 col-md-6', 'id' => 'goldenForm')) }}
				<fieldset>
					<legend>Please, Fill the form.</legend>
					<div class="form-group rating row col-xs-12">
						<label for="rating-input-1-10" >Rating : </label>
						<input type="radio" class="rating-input"
						id="rating-input-1-10" value="10" name="rating-input"/>
						<label for="rating-input-1-10" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-9" value="9" name="rating-input"/>
						<label for="rating-input-1-9" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-8" value="8" name="rating-input"/>
						<label for="rating-input-1-8" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-7" value="7" name="rating-input"/>
						<label for="rating-input-1-7" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-6" value="6" name="rating-input"/>
						<label for="rating-input-1-6" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-5" value="5" name="rating-input"/>
						<label for="rating-input-1-5" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-4" value="4" name="rating-input"/>
						<label for="rating-input-1-4" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-3" value="3" name="rating-input"/>
						<label for="rating-input-1-3" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-2" value="2" name="rating-input"/>
						<label for="rating-input-1-2" class="rating-star"></label>
						<input type="radio" class="rating-input"
						id="rating-input-1-1" value="1" name="rating-input"/>
						<label for="rating-input-1-1" class="rating-star"></label>
					</div>
					<div class="form-group row">
						<label for="from">Your Name : </label>
						<input type="text" class="form-control" id="from" name="from" placeholder="Name" />
					</div>
					<div class="form-group row">
						<label for="comm">Message : </label>
						<textarea type="text" class="form-control" style="resize: vertical;" rows="6" id="comm" name="comm" placeholder="Message ..."></textarea>
					</div>
					<button type="submit" class="btn btn-info" data-loading-text="Sending ..." data-complete-text="Sent !">Send Comment</button>
				</fieldset>
				{{ Form::close() }}
				<div class="col-md-6 hidden-xs hidden-sm">
					<img id="golden_book_icon" class="img-responsive" src="/img/icons/golden_book.png" alt="contact me" />
				</div>
			</div>
		</div>
	</div>
	<br /><br />
	<div id="goldenBook" class="row"></div>
	<script type="text/javascript">
	refreshGB();
	</script>
	<div class="row text-center">
	<small>{{{ DB::table('golden_book')->count() }}} record(s).</small>
	</div>
	<div class="row text-center">
		<div class="col-md-6">
			<a href="https://www.talentoday.com/users/guillaume-lefrant/personality" target="_blank" title="talentoday.com">
				<img src="http://puu.sh/iDduc.png" alt="personnality" />
			</a>
		</div>
		<div class="col-md-6">
			<a href="https://www.talentoday.com/users/guillaume-lefrant/personality" target="_blank" title="talentoday.com">
				<img src="http://s3.amazonaws.com/talentoday_production/attachments/011/807/294/7be459b3202b7c0715e1a07458390f2242d4a283/medium." alt="talentoday.com" />
			</a>
		</div>
	</div>
</div>
@stop
