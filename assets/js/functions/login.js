$(document).ready(function(){
	console.log('hhhh');
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
		}
	});
});