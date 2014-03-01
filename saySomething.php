<?php

header('refresh : 2 ; url = http://nitsurat.acm.org/contact.php');

$headers = 'From: '. $_POST['email']. "\r\n" .
   'Reply-To: '. $_POST['email']. "\r\n" .
   'X-Mailer: PHP/' . phpversion();

$message = $_POST['message']. "\r\n\r\nFrom: ". $_POST['name'];

if(mail('admin@nitsurat.acm.org', 'Say Something @ nitsurat.acm.org', $message, $headers)) {
	echo 'Your message was submitted successfully.';
}
else {
	echo 'There were errors processing your message. Please try again.';
}

?>
