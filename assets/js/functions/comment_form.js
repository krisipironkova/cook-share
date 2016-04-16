$(document).ready(function(){
	$("#comment_form").validate({
		rules:{
			comment:{
				required: true
			}
		}, messages:{
			comment: "Please write a comment !"
		},
		submitHandler: function(form){
			var data = $(form).serializeArray();
			data.push({name: 'type', value: 'comment_form'});
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
							    window.location.href = '/cook-share/recipes/my_recipes';
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