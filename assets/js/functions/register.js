$(document).ready(function() {

	$('#register').on('submit', function(e) {

		e.preventDefault();
		// ToDo:
		// Validation: Check for empty fields, check for valid email, check password length etc.

		if ($('input[name="email"]').val() == '') {
			$('.alert.alert-danger').css('display', 'block').text('Please type an email!').delay(3000).fadeOut('slow');
			
		} else {
			$.ajax("http://localhost/cook-share/users/", {
				method: 'POST',
				data: $(this).serialize(),
				dataType: 'json',
				success: function(response) {
					switch(response.status) {
						case true:
							$('.alert.alert-success').css('display', 'block').text(response.message).delay(3000).fadeOut('slow');
							break;
						case false:
							 $('.alert.alert-danger').css('display', 'block').text(response.message).delay(3000).fadeOut('slow');
							break;

					}
				},
				error: function(response) {
					console.log('ERROR!!!');
					console.log(response);
				}
			});
		}
	});

});
