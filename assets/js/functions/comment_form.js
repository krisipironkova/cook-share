$(document).ready(function(){
	$("#comment_form").validate({
		rules:{
			comment:{
				required: true
			}
		}, messages:{
			comment: "Please write a comment !"
		}
	});
});