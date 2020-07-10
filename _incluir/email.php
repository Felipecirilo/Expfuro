<?php
// Caminho da biblioteca PHPMailer
require ('PHPMailer/PHPMailerAutoload.php');

// Instância do objeto PHPMailer
$mail = new PHPMailer;

// Configura para envio de e-mails usando SMTP
$mail->isSMTP();

// Servidor SMTP
$mail->Host = 'smtp.gmail.com';

// Usar autenticação SMTP
$mail->SMTPAuth = true;

// Usuário da conta
$mail->Username = 'testelipe96@gmail.com';

// Senha da conta
$mail->Password = 'teste1996';

// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';

// Porta do servidor SMTP
$mail->Port = 465;

// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);

// Email do Remetente
$mail->From = $email;

// Nome do Remetente
$mail->FromName = $nome;

// Endereço do e-mail do destinatário
$mail->addAddress('testelipe96@gmail.com');

// Assunto do e-mail
$mail->Subject = 'Sugestões para o seu TCC';

// Mensagem que vai no corpo do e-mail
$mail->Body = $mensagem;

// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;