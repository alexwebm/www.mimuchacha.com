<?php
class sendMail{
	
	
	function bodyMail($items_body)
	{
		if(empty($items_body[1]))
		{
			$phone = '<strong>Tel&eacute;fono:</strong> No proporciono un n&uacute;mero de tel&eacute;fono';
		}
		else
		{
			$phone = '<strong>Tel&eacute;fono:</strong> '.$items_body[1];
		}

		if(empty($items_body[2]))
		{
			$phone = '<strong>Ciudad:</strong> No proporciono un n&uacute;mero de tel&eacute;fono';
		}
		else
		{
			$phone = '<strong>Ciudad:</strong> '.$items_body[2];
		}

		$body = '<span style="font-size:24px;">Formulario de contacto del sitio web</span>
				 <br><br>
				 <p>El usuario con los siguientes datos nos contacto:</p><br>			 
				 <strong>Nombre:</strong> '.$items_body[0].'<br>
				 '.$phone.'<br>
				 '.$ciudad.'<br>
				 <strong>Mensaje:</strong> <br><strong>'.$items_body[2].'</strong>
				 <p>'.$items_body[3].'</p>';

			return $body;
		
	}

	function sendingMail($to, $from, $message){
		$headers = 'MIME-Version:1.0'. "\r\n".
			   'Content-type:text/html; charset=iso-8859-1'."\r\n".
			   'From: '.$from . "\r\n" ;
		
		mail($to, 'Contacto Sitio Web', $message, $headers);
		$json_response = json_encode(array('state' => 'Send', ));
		return $json_response;
	}


}

?>