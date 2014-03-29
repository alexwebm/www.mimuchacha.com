<?php
	if(isset($_POST['name']))
	{
		include('sendMail.php');

		$ajaxData = array($_POST['name'], $_POST['phone'], $_POST['ciudad'], $_POST['mensaje']);

		$sendmail = new sendMail;
		$body = $sendmail->bodyMail($ajaxData);

		$action = $sendmail->sendingMail('galax.chealex@gmail.com', $_POST['mail'], $body);
		echo $action;

	}

?>