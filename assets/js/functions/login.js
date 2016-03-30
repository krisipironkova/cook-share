$(document).ready(function(){
	$("#login").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			}
		},messages: {
			email: {
				required: "Wrong username or password. Please try again!",
				email: "Wrong username or password. Please try again!"
			},
			password: {
				required: "Wrong username or password. Please try again!",
				minlength: "Wrong username or password. Please try again!"
			}
		},
		submitHandler: function(form){
			var data = $(form).serializeArray();
			data.push({name: 'type', value: 'login'});
			console.log(data);

			$.ajax("http://localhost/cook-share/users/", {
				method: 'POST',
				data: data,
				dataType: 'json',
				success: function(response) {
					switch(response.status) {
						case true:
							$('.alert.alert-success').css('display', 'block').text(response.message);
							 window.setTimeout(function() {
							    window.location.href = '/cook-share';
							}, 1000);
							break;
						case false:
							 $('.alert.alert-danger').css('display', 'block').text(response.message);
							break;
					}
					console.log('success');
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