$(document)
.on('submit', 'form.js-register', function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $('.js-error', _form);

	var dataObj = {
		email: $('input[type="email"]', _form).val(),
		password: $('input[type="password"]', _form).val()
	}

	if(dataObj.email.length < 6) {
		_error.text('Please enter a valid email address.').hide().fadeIn();
		return false;
	}
	else if(dataObj.password.length < 8) {
		_error.text('Please enter at least 8 characters long.').hide().fadeIn();
		return false;
	}

	_error.hide();

	$.ajax({
		type: 'POST',
		url: 'ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true
	})
	.done(function ajaxDone(data) {
		// Whatever data is
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		}
		else if(data.error !== undefined) {
			_error.text(data.error).hide().fadeIn();
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	});

	return false;
})
.on('submit', 'form.js-login', function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $('.js-error', _form);

	var dataObj = {
		email: $('input[type="email"]', _form).val(),
		password: $('input[type="password"]', _form).val()
	}

	if(dataObj.email.length < 6) {
		_error.text('Please enter a valid email address.').hide().fadeIn();
		return false;
	}
	else if(dataObj.password.length < 8) {
		_error.text('Please enter at least 8 characters long.').hide().fadeIn();
		return false;
	}

	_error.hide();

	$.ajax({
		type: 'POST',
		url: 'ajax/login.php',
		data: dataObj,
		dataType: 'json',
		async: true
	})
	.done(function ajaxDone(data) {
		// Whatever data is
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		}
		else if(data.error !== undefined) {
			_error.html(data.error).hide().fadeIn();
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	});

	return false;
});