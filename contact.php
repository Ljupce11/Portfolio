<?php

	if (isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m'])){
		$name = preg_replace("#[^a-z]#", "", $_POST['n']);
		$email = preg_replace("#[&a-z.@]#", "", $_POST['e']);
		$msg = $_POST['m'];

		if ($name == '' || $email == '' || $msg == ''){
			echo "Fail";
			exit();
		}
		else {
		
		$to = "ljubomir.bojadziev@gmail.com, $email";
		$subject = "Portfolio Contact Message";
		$message = "$msg";
		$headers = "From: $email\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		mail($to, $subject, $message, $headers);
		echo "Success";
		exit();
		}
	}

?>