<?
header('Content-Type: text/html; charset=utf-8');
include_once("lib/class.emailvalidator.php");
include_once("lib/phpmailer/class.phpmailer.php");

$txtName     = trim($_POST['txtName']);
$txtEmail    = trim($_POST['txtEmail']);
$txtMessage  = trim($_POST['txtMessage']);

function returnHtmlBody($name, $email, $message){
	return '
		<h2>Olá Fialho,</h2>
		<p>você tem uma nova mensagem enviada pelo afialho.com!</p>
		<p>
		<ul>
			<li>Nome: '. $name . '</li>
			<li>E-mail: '. $email .'</li>
			<li>Mensagem: '. $message .'</li>
		</ul>
		</p>
	';	
}


$EmailValidator = new EmailValidator(); 

if($EmailValidator->isValidEmail($txtEmail)) {
	
	// Creating a Object of PHPMailer
	$mail = new PHPMailer(); 
	// By default this will use mail()

	// Inform class to use the sendmail method
	$mail->IsSendmail();
	// Above line does the all trick

	// Set the body
	$mail->Body = returnHtmlBody($txtName,$txtEmail,$txtMessage);
	$mail->isHTML(true);

	// Add Reply To
	//$mail->AddReplyTo("adriano@afialho.com","Reply To");

	// Add From
	$mail->SetFrom($txtEmail, $txtName);

	// Add To Address
	$mail->AddAddress("adriano@afialho.com", "To Mail");

	// Add the subject
	$mail->Subject = "[afialho.com] Mensagem de ". $txtName ." recebida pelo site.";

	// Set the mail to be send as HTML
//	$mail->MsgHTML($body);

	// Send the mail Finally
	if(!$mail->Send()) {
		$res = json_encode(array('success' => false, 'message' => 'Erro ao enviar mensagem: ' . $mail->ErrorInfo, 'type' => 'error'));
	}else {
		$res = json_encode(array('success' => true, 'message' => '<b>Woohoo!</b> Mensagem enviada!', 'type' => 'success'));
	}
} else {
	$res = json_encode(array('success' => false, 'message' => 'O e-mail informado ' . $txtEmail . ' é inválido!', 'type' => 'error'));
}

print $res;
?>