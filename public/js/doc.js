function sleep(timer, callback) {
	window.setTimeout(function() {
		callback();
	}, timer);
}

$(document).ready(function() {
	// CV -> commentary + rating popover
	$('.experience-hover').popover();

	$('a', '#showForm').click(function() {
		$('#hiddenForm').slideDown(1000);
		$('#showForm').slideUp(1000);
	});

	$('a', '#hiddenForm').click(function() {
		$('#hiddenForm').slideUp(1000);//transition({ scale: 0 }).transition({ x: -40 }).transition({ x: +40 }).transition({ x: 0 });
		$('#showForm').slideDown(1000);
	});

});

function animateThumbs(res, $clicked) {
	if (res.state === 1) {
		$clicked.data('thumbs', res.val);
		$clicked.html('<i class="glyphicon glyphicon-thumbs-up"></i> +' + res.val);
		$clicked.transition({ scale: 2 }).transition({ scale: 1 });
		$('#thumbSuccess').toggleClass('hidden');
		$('#thumbSuccess').transition({	y: '+=180px', scale: 1.2, easing: 'ease', duration: 1000 })
		.transition({ delay: 1500, y: '-=180px', scale: 1, easing: 'ease', duration: 1500 });
		sleep(3500, function(){
			$('#thumbSuccess').toggleClass('hidden');
		});
	} else {
		$('#thumbError').toggleClass('hidden');
		$('#thumbError').animate({
			top: '+=180px'
		}, 1000, "swing", function(){
			window.setTimeout(function(){
				$('#thumbError').toggleClass('hidden');
				$('#thumbError').animate({
					top: '-=180px'
				}, 1);
			}, 3000);
		});
	}
	$clicked.data('state', 'ok');
}

function displayMailState(res, $form) {
	var $button = $form.find('button');
	if (res.state === 1) {
		$form.addClass('formComplete');
		$form.find('legend').html('Thanks for your input.');
		$('#send_mail_icon').toggleClass('blue2green');
		$('#page').prepend('<div id="mailSent" class="container alert alert-success alert-dismissible" style="display: none;">'+
			'<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>'+
			'<p>Thank You for your mail to '+res.to+'. I will try to answer You the fastest I can.</p></div>');
		$('#mailSent').show(500);
		$form.find(':input:not(:disabled)').prop('disabled', true);
		$button.removeClass('btn-info').addClass('btn-success').attr('style', 'color: black;').button('complete').prop('disabled', true);
		sleep(7500, function(){
			if ($('#mailSent').length != 0) {
				$('#mailSent').hide(200);
				sleep(210, function(){
					$('#mailSent').remove();
				});
			}
		});
	}
}

function displayGoldenState(res, $form) {
	var $button = $form.find('button');
	if (res.state === true) {
		$form.addClass('formComplete');
		$form.find('legend').html('Thanks for your input.');
		$('#golden_book_icon').toggleClass('blue2green');
		console.log();
		$('#page').prepend('<div id="goldenSent" class="container alert alert-success alert-dismissible" style="display: none;">'+
			'<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>'+
			'<p>Thank You for your commentary. I really appreciate.</p></div>');
		$('#goldenSent').show(500);
		$form.find(':input:not(:disabled)').prop('disabled', true);
		$button.removeClass('btn-info').addClass('btn-success').attr('style', 'color: black;').button('complete').prop('disabled', true);
		sleep(5000, function(){
			if ($('#goldenSent').length != 0) {
				$('#goldenSent').hide(200);
				sleep(210, function(){
					$('#goldenSent').remove();
				});
			}
			refreshGB();
		});

	}
}

// Refresh Golden Book
function refreshGB() {
	$.ajax({
		type: "POST",
		url: "/ajax/refresh_golden_book",
		dataType: "html"
	}).done(function($res) {
		$('#goldenBook').html($res);
	}).then(function() {
		console.log('refresh done.');
	});
}

