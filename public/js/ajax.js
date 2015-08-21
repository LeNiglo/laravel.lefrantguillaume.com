// On Document Ready : set ajax calls
$(document).ready(function() {

 $.ajaxPrefilter(function(options, originalOptions, xhr) {
        var token = $('meta[name="csrf-token"]').attr('content');
        if (token) {
            return xhr.setRequestHeader('X-CSRF-TOKEN', token);
        }
    });

	// +1 for interactiv CV
	$('a.thumbUp').click(function() {
		var $clicked = $(this);
		if ($clicked.data('state') === 'ok') {
			$clicked.data('state', 'processing');
			$.ajax({
				type: "POST",
				url: "/ajax/thumb/" + $clicked.data("id"),
				dataType: "json",
				data: { id: $clicked.data("id") }
			}).done(function($res) {
				animateThumbs($res, $clicked)
			});
		}
	});

	// +1 for check out
	$('.check_out_seen').click(function() {
		var $clicked = $(this);
		$.ajax({
			type: "POST",
			url: "/ajax/check_out_seen/" + $clicked.data("id"),
			dataType: "json",
			data: { id: $clicked.data("id") }
		}).done(function(res) {
			if (res.state === 1) {
				window.location.assign($clicked.data("redirect"));
			} else {
				console.log('Oops.');
			}
		});
	});

	// Send Mail via ajax
	$('#contactForm').submit(function(event) {
		event.preventDefault();
		var $form = $(this);
		$form.find('button').button('loading');
		$.ajax({
			type: "POST",
			method: "POST",
			url: "/ajax/send_mail",
			dataType: "json",
			data: $('#contactForm').serialize()
		}).done(function($res) {
			displayMailState($res, $form);
		}).fail(function($res) {
			console.log('Failed')
			$form.find('button').button('reset');
		}).then(function() {
			sleep(10, function(){
				$form.find('button').prop('disabled', true);
			});
		});
	});

	// Write in Golden Book
	$('#goldenForm').submit(function(event) {
		event.preventDefault();
		var $form = $(this);
		$form.find('button').button('loading');
		$.ajax({
			type: "POST",
			url: "/ajax/golden_book",
			dataType: "json",
			data: $('#goldenForm').serialize()
		}).done(function($res) {
			displayGoldenState($res, $form);
		}).fail(function() {
			console.log('Failed')
			$form.find('button').button('reset');
		}).then(function() {
			refreshGB();
			sleep(10, function(){
				$form.find('button').prop('disabled', true);
				document.getElementById('hiddenForm').style.display='none';
				document.getElementById('showForm').style.display='';
			});
		});
	});
});
