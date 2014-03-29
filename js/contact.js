$(document).ready(function(){
	$('#phone').numeric();
	$('.boxSendindg, .success').hide();
	
	$('#enviar').on('click', function(){
		event.preventDefault();

		var name = $('#name').val();
		var email = $('#mail').val();
		var phone = $('#phone').val();
		var message = $('#mensaje').val();
		var captcha = $('#captcha').val();
		var codesec = $('#codesec').val();

		if (name == null || name.length == 0 || /^\s+$/.test(name)) {
			$('#name').addClass('error');
			$('#name').val('Enter full name is required');
		}
		else{
			if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)/.test(email))) {
				$('#mail').addClass('error');
				$('#mail').val('Enter email is required');
			}
			else
			{
				
					if (message == null || message.length == 0 || /^\s+$/.test(message)) {
						$('#mensaje').addClass('error');
						$('#mensaje').val('Do not forget to enter your message');
					}
					else
					{
						if(captcha != codesec)
    					{
        					$('#captcha').addClass('error');
							$('#captcha').val('Codigo incorrecto');
    					}
    					else
    					{
    						var json = {"name" : name, "email" : email, "phone" : phone, "title" : title, "message" : message }; 
								
								$.ajax({
									data:  json,
									url:   'include/helperMail.php',
									type:  'post',
									
									beforeSend: function(){
										$('#contacto').css('opacity','0.3');
        							},

									success:  function (data) {
										var json_resp = $.parseJSON(data);
										if(json_resp.state == 'Send')
										{
											clearForm("#contacto");
											$('#contacto').css('opacity', '1.0');
										}
									}
								});
    					}
					}
				
			}
		}
		
	});


	function clearForm(form){
	    $(form).find('input').each(function() {
	        switch(this.type) {
	            case 'password':
                case 'text':
                case 'hidden':
	                $(this).val('');
		            break;
		        case 'checkbox':
		        case 'radio':
		            this.checked = false;
		    }
		});
			 
		$(form).find('select').each(function() {
		    $("#"+this.id + " option[value=0]").attr("selected",true);
		});
		
		$(form).find('textarea').each(function(){
		    $(this).val('');
		});
	}


	$('input, textarea').on('click', function(){
		if($(this).hasClass('error'))
		{
			$(this).removeClass('error');
			$(this).val('');
		}
	});



});