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
		submitHandler: function(form){
			var data = $(form).serializeArray();
			data.push({name: 'type', value: 'register'});

			$.ajax("http://localhost/cook-share/users/", {
				method: 'POST',
				data: data,
				dataType: 'json',
				success: function(response) {
					switch(response.status) {
						case true:
							$('.alert.alert-success').css('display', 'block').text(response.message);
							 window.setTimeout(function() {
							    window.location.href = '/cook-share/users/login';
							}, 1000);
							break;
						case false:
							 $('.alert.alert-danger').css('display', 'block').text(response.message);
							break;
					}
					console.log(response);
				},
				error: function(response) {
					console.log(response.status);
					console.log(response);
					console.log('error');
				}
			});
		}
	});

});
