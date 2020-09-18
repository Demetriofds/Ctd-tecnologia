<?php

	$para = 'atendimento@ctdtecnologia.com.br';
	// $copia = 'tecnoinfosis@gmail.com';
	$assunto =  'Email gerado pelo meu Site ctdtecnologia.com.br';
	$nome = $_POST['txtnome'];
	$sobrenome = $_POST['txtsobrenome'];
	$email = strtolower($_POST['email']);
	$fone = $_POST['fone'];
	$mensagem = $_POST['mensagem'];

		$corpo  = "<strong> Atenção Contato do site, (mensagem Urgente):</strong>". $assunto ."<br><br>";
		$corpo .= "<strong> Nome: </strong>". $nome . $sobrenome ."<br>";
		$corpo .= "<strong> Email: </strong>". $email ."<br>";
		$corpo .= "<strong> Fone: </strong>". $fone ."<br>";
		$corpo .= "<strong> Mensagem: </strong>". $mensagem ."<br>";

		$header = "Content-Type: text/html; charset = utf-8\n";
		$header .= "From: $email reply-to: $email\n";

		mail($para,$assunto,$corpo,$header);

		if(mail($para,$assunto,$corpo,$header)){

		echo '<script type="text/javascript">alert("email enviado com sucesso")</script>';
		echo '<script language="JavaScript">location.href="index.php"</script>';
		}else {
        echo "Erro ao enviar o seu email";
		}
		// Limpa os destinatários e os anexos

?>

