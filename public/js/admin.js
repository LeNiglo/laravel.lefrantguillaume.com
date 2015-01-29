function refresh_check_jumbo() {
	var $form = $('form#checkOutForm');
	var $title = $form.find('#title').val();
	var $content = $form.find('#content').val();
	var $jumbo_title = $('#exempleJumbo').find('.check-header');
	var $jumbo_content = $('#exempleJumbo').find('.check-content');
	$jumbo_title.html($title);
	$jumbo_content.html($content);
	return true;
}; 

function refresh_check_outs() {
	$.ajax({
		type: "POST",
		url: "/ajax/admin_checks",
		dataType: "html"
	}).done(function($res) {
		$('tbody').html($res);
		initializeAdmin();
	});
};

function refresh_contacts() {
	$.ajax({
		type: "POST",
		url: "/ajax/admin_contacts",
		dataType: "html"
	}).done(function($res) {
		$('tbody').html($res);
		initializeAdmin();
	});
};

function submit_new_contact() {
	$.ajax({
		type: "POST",
		url: "/admin/contacts/create",
		dataType: "json",
		data: $('#contactForm').serialize()
	}).done(function($res) {
		refresh_contacts();
		if ($res.success === false)
			console.log('Error while creating user.');
	}).then(function() {
		$('#contactForm').trigger('reset');
	});
};

function submit_new_check_out() {
	$('#checkOutValid').button('loading');
	$.ajax({
		type: "POST",
		url: "/admin/check_out/create",
		data: $('#checkOutForm').serialize()
	}).done(function($res) {
		if ($res.success === false)
			console.log('Error while creating check out.');
	}).then(function() {
		refresh_check_outs();
		$('#checkOutForm').trigger('reset');
		refresh_check_jumbo()
		$('#checkOutValid').button('reset');
	});
}

/*
** On Document Ready !
*/

function initializeAdmin() {

	/*
	** CHECK OUTS
	*/
	
	$('a.removeCheckOut').click(function() {
		var $clicked = $(this);
		var $row = $clicked.parent().parent();
		if (confirm('Do You really want to remove this Check Out ?')) {
			$.ajax({
				type: "POST",
				url: "/admin/check_out/remove/" + $clicked.data("id"),
				dataType: "json",
				data: { id: $clicked.data("id") }
			}).done(function($res) {
				if ($res.success != false)
					$row.remove();
				else
					console.log('Error while deleting check out #'+$clicked.data("id")+'.');
			});
		}
	});

	$('a.editCheckOut').click(function() {
		var $clicked = $(this);
		var $row = $clicked.parent().parent();
		var $title = $row.find('.title-check').html();
		var $html = $row.find('.html-check code').text();
		$('#modalCheckOut').find('#id').val($clicked.data("id"));
		$('#modalCheckOut').find('#title').val($title);
		$('#modalCheckOut').find('#html').val($html);
		$('#modalCheckOut').modal('show');
	});

	$('#modalCheckOutValid').click(function() {
		$.ajax({
			type: "POST",
			url: "/admin/check_out/update/" + $('#modalCheckOut').find('#id').val(),
			dataType: "json",
			data: $('#modalCheckOutForm').serialize()
		}).done(function($res) {
			if ($res.success === false)
				console.log('Error while update check out #'+$('#modalCheckOut').find('#id').val()+'.');
		}).then(function() {
			refresh_check_outs();
			$('#modalCheckOut').modal('hide');
		});
	});

	/*
	** CONTACTS
	*/

	// removeContact
	$('a.removeContact').click(function() {
		var $clicked = $(this);
		var $row = $clicked.parent().parent();
		var $name = $row.find('.name-contact').html();
		if (confirm('Do You really want to remove '+$name+' from the Contacts ?')) {
			$.ajax({
				type: "POST",
				url: "/admin/contacts/remove/" + $clicked.data("id"),
				dataType: "json",
				data: { id: $clicked.data("id") }
			}).done(function($res) {
				if ($res.success != false)
					$row.remove();
				else
					console.log('Error while deleting user #'+$clicked.data("id")+'.');
			});
		}
	});

	// editContact
	$('a.editContact').click(function() {
		var $clicked = $(this);
		var $row = $clicked.parent().parent();
		var $name = $row.find('.name-contact').html();
		var $email = $row.find('.email-contact').html();
		var $color = $row.find('.color-contact').html();
		$('#modalContact').find('#id').val($clicked.data("id"));
		$('#modalContact').find('#name').val($name);
		$('#modalContact').find('#email').val($email);
		$('#modalContact').find('#color').val($color);
		$('#modalContact').modal('show');
	});

	$('#modalContactValid').click(function() {
		$.ajax({
			type: "POST",
			url: "/admin/contacts/update/" + $('#modalContact').find('#id').val(),
			dataType: "json",
			data: $('#modalContactForm').serialize()
		}).done(function($res) {
			if ($res.success === false)
				console.log('Error while update user #'+$('#modalContact').find('#id').val()+'.');
		}).then(function() {
			refresh_contacts();
			$('#modalContact').modal('hide');
		});
	});

	$('#modalContactForm').keypress(function(e) {
		if (e.which == 13) {
			$('#modalContactValid').click();
		}
	});

};

$(document).ready(function() { initializeAdmin(); });