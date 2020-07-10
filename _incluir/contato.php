<?php require_once "menu.php"?>
<?php require_once "banco.php"?>

        <main>
            <div class="pergunta">
                <p>Se interessou pelo nosso projeto ou tem alguma sugestão de melhora?! Nos mande uma mensagem e retornaremos assim que possivel :)</p>
            </div>
            
            <div id="janela_formulario">
                <img src="../_img/contato.png">
                <form id="form_contato" action="contato.php" method="post">
                    <input id="nome" type="text" name="nome" placeholder="Digite seu nome">
                        <input id="email" type="email" name="email" placeholder="Digite seu email">
                            <label>Mensagem:</label>
                                <textarea id="msg" type="text" name="mensagem"></textarea>
                                    <input id="enviar_formulario" type="submit" name="enviar" value="Enviar Mensagem">
                    
                    <?php
                        if (isset($mensagem)) {
                            echo "<p id='msg_sucesso'>" . $mensagem . "</p>";
                        }
                    ?>
                    
                    <div id="mensagem_erro"></div>
    
                </form>
            </div>
        </main> 
<?php require_once "footer.php"?>
