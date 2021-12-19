$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if (dataObj.email.length < 6) {
		_error
		     .text("Please enter a valid email address")
		     .show();
		return false;
	} else if (dataObj.password.length < 8) {
				_error
		     .text("Please enter a password that is at least 8 characters long.")
		     .show();
		return false;
	}


	//if the code gets this far we start the ajax process
	_error.hide();

	$.ajax ({
		type: 'POST',
		//wouldn't work unless I put the root of the folder here (i guess since i have other projects? idk)
		url: '/PHP-Login-System/ajax/register.php', 
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done (function ajaxDone(data){
		//whatever data is
		console.log(data);
		if(data.redirect !== undefined){
			//window.location = data.redirect;
		}

		alert(data.name);
	})

	.fail (function ajaxFailed(e) {
		//this failed
		console.log(e);
	})

	.always (function ajaxAlwaysDoThis(data){
		//always do
		console.log('always');
	})


	return false;
})