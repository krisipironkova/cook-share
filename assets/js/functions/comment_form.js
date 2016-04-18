$(document).ready(function(){

	function updateComments(id) {
		return $.get('http://localhost/cook-share/api/comments/', {
			id: id,
		});
	}

	$("#comment_form").validate({
		rules:{
			data:{
				required: true,
				minlength: 5
			}
		}, messages:{
			data: {
				required: "Please write a comment !",
				minlength: "Minimum 5 characters!"
			}
		},
		submitHandler: function(form){
			var data = $(form).serializeArray();
		 	$.ajax("http://localhost/cook-share/api/comments/", {
				method: 'POST',
				data: data,
				dataType: 'json',
				success: function(response) {
					switch(response.status) {
						case true:
							$('.alert.alert-success').css('display', 'block').text(response.message);

		 					updateComments(data[0].value).success(function(allComments) {
		 						$('#comments').html('');
		 						$("textarea[name='data']").val('');

		 						$.each(allComments, function(comment) {
		 							$('#comments').append('<div class="testimonial testimonial-style-3"><blockquote><p>'+allComments[comment].data+'</p></blockquote><div class="testimonial-arrow-down"></div><div class="testimonial-author">'+allComments[comment].username+'</div></div>');
		 						});
		 					});
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