$(document).ready(function() {

	$('#register').validate({
		rules: {
			first_name: "required",
			last_name: "required",
			username: {
				required: true,
				minlength: 3
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
			passconf: {
				required:true,
				minlength: 5,
				equalTo: "#password"
			}
		},
		messages: {
			first_name: "Please enter first name",
			last_name: "Please enter last name",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 3 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			passconf: {
				required: "Please provide a password",
				equalTo: "Please enter the same password"
			}
		},
		submitHandler: function(form) {
			$.ajax("http://localhost/cook-share/users/", {
				method: 'POST',
				data: $(form).serialize(),
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
