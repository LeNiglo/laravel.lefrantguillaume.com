<?php $height = (isset($height) ? $height : 32); ?>
<?php $width = (isset($width) ? $width : 100); ?>
<div class="text-center" id="social-bar" style="height: {{$height}}px; width: {{$width}}%;margin:auto;">
	<div class="row">
		<div class="col-xs-2">
			<a href="https://www.facebook.com/guillaume.lefrant" target="_blank">
				<img height="{{ $height }}" src="{{ asset('assets/images/icons/facebook.png') }}" alt="facebook" class="hvr-bob" />
			</a>
		</div>
		<div class="col-xs-2">
			<a href="https://www.linkedin.com/profile/view?id=368823632" target="_blank">
				<img height="{{ $height }}" src="{{ asset('assets/images/icons/linkedin.png') }}" alt="linkedin" class="hvr-bob" />
			</a>
		</div>
		<div class="col-xs-2">
			<a href="http://www.codecademy.com/LeNiglo" target="_blank">
				<img height="{{ $height }}" src="{{ asset('assets/images/icons/code_academy.png') }}" alt="codecademy" class="hvr-bob" />
			</a>
		</div>
		<div class="col-xs-2">
			<a href="https://www.codingame.com/profile/3b4ba6e142f09ed5d45033f3e66ce7cd652726" target="_blank">
				<img height="{{ $height }}" src="{{ asset('assets/images/icons/codingame.png') }}" alt="codingame" class="hvr-bob" />
			</a>
		</div>
		<div class="col-xs-2">
			<a href="https://github.com/LeNiglo" target="_blank">
				<img height="{{ $height }}" src="{{ asset('assets/images/icons/github.png') }}" alt="github" class="hvr-bob" />
			</a>
		</div>
		<div class="col-xs-2">
			<a href="skype://lefrantguillaume@gmail.com">
				<img height="{{ $height }}" src="{{ asset('assets/images/icons/skype.png') }}" alt="skype" class="hvr-bob" />
			</a>
		</div>
	</div>
</div>
