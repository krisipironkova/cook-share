$(document).ready(function(){
	$("#recipe_form").validate({
		rules: {
			// file_source: {
			// 	required: true
			// },
			description: {
				required: true,
				minlength: 1
			},
			directions: {
				required: true,
				minlength: 1
			},
			title: {
				required: true,
				minlength: 1
			},
			prep_time: {
				required: true,
				number: true,
				minlength: 1
			},
			servings: {
				required: true,
				number: true,
				minlength: 1
			},
			cals: {
				required: true,
				number: true,
				minlength: 1
			},
			ingredients: {
				required: true,
				minlength: 1
			}
		},messages: {
			// file_source: {
			// 	required: "No file is chosen"
			// },
			description: {
				required: "Please enter a description",
				minlenght: "Please enter atleast 1 symbol"
			},
			directions: {
				required: "Please enter directions",
				minlenght: "Please enter atleast 1 symbol"
			},
			title: {
				required: "Please enter a title",
				minlenght: "Please enter atleast 1 symbol"
			},
			prep_time: {
				required: "Please enter a preparation time",
				number: "Please enter only numbers",
				minlenght: "Please enter atleast 1 symbol"
			},
			servings: {
				required: "Please enter number of servings",
				number: "Please enter only numbers",
				minlenght: "Please enter atleast 1 symbol"
			},
			cals: {
				required: "Please enter number of calories",
				number: "Please enter only numbers",
				minlenght: "Please enter atleast 1 symbol"
			},
			ingredients: {
				required: "Please enter ingredients",
				minlenght: "Please enter atleast 1 symbol"
			}
		},
		submitHandler: function(form){
			var data = $(form).serializeArray();
			data.push({name: 'type', value: 'form'});
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