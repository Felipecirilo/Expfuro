<?php 
    function enviarMensagem($dados) {
        // Dados do Formulario
        $nome_usuario       = $dados['nome'];
        $email_usuario      = $dados['email'];
        $mensagem_usuario   = $dados['mensagem'];
        
        // Variaveis de envio
        $destino    = "felipecirilo96@gmail.com";
        $remetente  = "tcc_expfuro@servidor.com";
        $assunto    = "Mensagem do site";
        
        // Corpo da mensagem
        $mensagem  = "O usuario " . $nome_usuario . "enviou uma mensagem." . "</BR>";
        $mensagem .= "Email do usuario: " . $email_usuario . "</BR>";
        $mensagem .= "Mensagem do usuario: " . "</BR>";
        $mensagem .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }
?>