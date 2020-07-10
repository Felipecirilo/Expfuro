<?php
    //Abrir Conexão
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="site_tcc";
    $conecta= mysqli_connect($servidor,$usuario,$senha,$banco);

    //Teste de Conexão
    if (mysqli_connect_errno()) {
        die("Conexão Falhou: " . mysqli_connect_errno());
    }   
?>

<?php 
    //Consulta ao Banco
    $consulta_sugestoes="SELECT * FROM sugestoes";
    $sugestoes=mysqli_query($conecta,$consulta_sugestoes);
    
    if (!$sugestoes) {
        die("Falha na consulta ao banco.");
    }
?>

<?php 
    //Inserçao no banco
    if (isset($_POST["nome"])){
       $nome        =$_POST["nome"];
       $email       =$_POST["email"];
       $mensagem    =$_POST["mensagem"];
        
        $inserir ="INSERT INTO sugestoes ";
        $inserir.="(nome,email,mensagem) ";
        $inserir.="VALUES ";
        $inserir.="('$nome','$email','$mensagem') ";
        
        $operacao_inserir=mysqli_query($conecta,$inserir);
        if(!$operacao_inserir) {
            die("Erro no banco de dados");
        } else {
            $mensagem="Mensagem enviada com sucesso!";
        }     
   } 
?>

<script>
    $(Document).ready(function() {
        $("#enviar_formulario").click(function(e){
            e.preventDefault();
            var validado=true;
            $("#mensagem_erro").text("");
            
            //Verificando de os campos estão preenchidos ou vazios.
            var nome=$("#nome").val();
            if (nome == ""){
                validado=false;
            }
            
            var email=$("#email").val();
            if (email == ""){
                validado=false;
            }
            
            var mensagem=$("#msg").val();
            if (mensagem == ""){
                validado=false;
            }
            
            //Validado o formulario
            if (!validado) { 
                $("#mensagem_erro").text("*ATENÇÃO, preencha todos os campos do formulario corretamente");
            } 
            
            if (validado){
                $("#form_contato").submit();  
            }  
        });
    });
            /*
            //Encerrar a $mensagem após 5 segundos 1°Opção. 
            function removeMsg() {
                setTimeout(function() {
                    var msg = document.getElementById("msg_sucesso");
                    msg.parentNode.removeChild(msg);
                    },5000);
            }
            document.onreadystatechange= () =>{
                if (document.readyState === 'complete') {
                    removeMsg();
                }
            };
            */
            
        //Encerrar a $mensagem após 5 segundos 2°Opção.
        setTimeout(function(){
            $('#msg_sucesso').remove();
        }, 5000);
</script>

<?php 
    //Encerrar Conexão
    mysqli_close($conecta);
?>