$(document).ready(function() {
	$("#register-account-form").unbind('submit').bind('submit', function() {
		var form = $(this);

		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(),
			dataType: 'json',
			success:function(response) {				
				if(response.success == true) {
					$("#messages").html('<div class="notification error closeable">'+
                        response.messages+
					  '<a class="close"></a>'+
					'</div>');

					$("#register-account-form")[0].reset();
					$(".text-danger").remove();
					$(".form-group").removeClass('has-error').removeClass('has-success');

				}
				// else {
				// 	$.each(response.messages, function(index, value) {
				// 		var element = $("#"+index);

				// 		$(element)
				// 		.closest('.form-group')
				// 		.removeClass('has-error')
				// 		.removeClass('has-success')
				// 		.addClass(value.length > 0 ? 'has-error' : 'has-success')
				// 		.find('.text-danger').remove();

				// 		$(element).after(value);

				// 	});
				// }
			} // /success
		});	 // /ajax

		return false;
	});	
});