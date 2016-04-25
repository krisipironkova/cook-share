$(document).ready(function(){
	$("#edit_form").validate({
		rules: {
			new_description: {
				minlength: 1
			},
			new_directions: {
				minlength: 1
			},
			new_title: {
				minlength: 1
			},
			new_prep_time: {
				number: true,
				minlength: 1
			},
			new_servings: {
				number: true,
				minlength: 1
			},
			new_cals: {
				number: true,
				minlength: 1
			},
			new_ingredients: {
				minlength: 1
			}
		},messages: {
			new_description: {
				minlenght: "Please enter atleast 1 symbol"
			},
			new_directions: {
				minlenght: "Please enter atleast 1 symbol"
			},
			new_title: {
				minlenght: "Please enter atleast 1 symbol"
			},
			new_prep_time: {
				number: "Please enter only numbers",
				minlenght: "Please enter atleast 1 symbol"
			},
			new_servings: {
				number: "Please enter only numbers",
				minlenght: "Please enter atleast 1 symbol"
			},
			new_cals: {
				number: "Please enter only numbers",
				minlenght: "Please enter atleast 1 symbol"
			},
			new_ingredients: {
				minlenght: "Please enter atleast 1 symbol"
			}
		}
	});
});