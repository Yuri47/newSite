
<!DOCTYPE HTML>
 

<html lang="pt-BR">
	<head>
		<meta name="theme-color" content="‪#‎0000ff">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	</head>
<body>
<?php

  require_once('class.phpmailer.php'); //chama a classe de onde você a colocou.
  require_once('class.smtp.php');
$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';


//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'testsontst0@gmail.com'; // usuario gmail.   
$mail->Password = '051211bpai46'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ver enviado.
$mail->From = "testsontst0@gmail.com"; 
$mail->FromName = "Tst"; 
$mail->CharSet = "UTF-8";

$mail->addAddress("yuri.alexs@gmail.com"); // email do destinatario.

$mail->Subject = "assunto"; 
$mail->Body = "mensagem";

if(!$mail->Send())
    echo "Erro ao enviar Email:" . $mail->ErrorInfo;
 
?>

</body>
</html>