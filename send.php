<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexÃ£o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem serÃ¡ SMTP
$mail->Host = "smtp.ig.com.br"; // EndereÃ§o do servidor SMTP
//$mail->SMTPAuth = true; // Usa autenticaÃ§Ã£o SMTP? (opcional)
//$mail->Username = 'seguradora1@ig.com.br'; // UsuÃ¡rio do servidor SMTP
//$mail->Password = 'mar353'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "seguradora1@ig.com.br"; // Seu e-mail
$mail->FromName = "marcus"; // Seu nome

// Define os destinatÃ¡rio(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('marcusedx@gmail.com', 'Fulano da Silva');
//$mail->AddAddress('ciclano@site.net');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // CÃ³pia Oculta

// Define os dados tÃ©cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail serÃ¡ enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->SubjectÂ  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = "Este Ã© o corpo da mensagem de teste, em <b>HTML</b>!  :)";
$mail->AltBody = "Este Ã© o corpo da mensagem de teste, em Texto Plano! \r\n :)";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");Â  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatÃ¡rios e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "NÃ£o foi possÃ­vel enviar o e-mail.";
  echo "<b>InformaÃ§Ãµes do erro:</b> " . $mail->ErrorInfo;
}
