<?
//para el primer ingreso
$errName = '';
$errEmail = '';
$errMessage = '';
$result = '';

if (isset($_POST["submit"])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$from = 'Demo Contact Form';
	$to = 'blanco.damian@gmail.com';
	$subject = 'Message from Contact Demo ';

	$body ="From: $name\n E-Mail: $email\n Message:\n $message";

	// Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Por favor, ingrese su nombre.';
	}

	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Por favor, ingrese un mail válido.';
	}

	//Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Por favor, ingrese su mensaje.';
	}

	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Gracias.</div>';
		} else {
			$result='<div class="alert alert-danger">Ocurrio un error.<br/>Intente nuevamente más tarde.</div>';
		}
	}
}else{
	$_POST['name'] = "";
	$_POST['email'] = "";
	$_POST['message'] = "";
}
?>
