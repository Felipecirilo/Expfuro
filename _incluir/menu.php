<?php 

$url_base = "http://localhost/site_tcc_teste/";

?>

<!doctype html>
<html>
    <head> 
        <title>TCC Ensaio de Expansão de Furo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="../_css/estilo.css" rel="stylesheet">   
        <link href="_css/estilo.css" rel="stylesheet">    
        <link href="../_css/mobile.css" type="text/css" rel="stylesheet" media="screen and (min-width:0px) and (max-width:1000px)"> 
        <link href="_css/mobile.css" type="text/css" rel="stylesheet" media="screen and (min-width:0px) and (max-width:1000px)"> 
    </head>
    <body>
            <nav>
                <img src="<?= $url_base ?>_img/logo.png">
                
                <ul id="menu-desktop">
                    <li><a href="<?= $url_base ?>index.php">HOME</a></li>    
                    <li><a href="<?= $url_base ?>_incluir/ensaio.php">ENSAIO DE EXPANSÃO DE FURO</a></li>   
                    <li><a href="<?= $url_base ?>_incluir/dispositivo.php">DISPOSITIVO</a></li>   
                    <li><a href="<?= $url_base ?>_incluir/resultado_conclusao.php">RESULTADOS E CONCLUSÃO</a></li>
                    <li><a href="<?= $url_base ?>_incluir/autores.php">AUTORES</a></li>
                    <li><a href="<?= $url_base ?>_incluir/contato.php">CONTATO</a></li>    
                </ul>
                
                <ul id="menu-mobile">
                    <li><a href="<?= $url_base ?>index.php">HOME</a></li>    
                    <li><a href="<?= $url_base ?>_incluir/ensaio.php">ENSAIO DE EXPANSÃO DE FURO</a></li>   
                    <li><a href="<?= $url_base ?>_incluir/dispositivo.php">DISPOSITIVO</a></li>   
                    <li><a href="<?= $url_base ?>_incluir/resultado_conclusao.php">RESULTADOS E CONCLUSÃO</a></li>
                    <li><a href="<?= $url_base ?>_incluir/autores.php">AUTORES</a></li> 
                    <li><a href="<?= $url_base ?>_incluir/contato.php">CONTATO</a></li>  
                </ul> 
-
                <div id="menu-btn">
                    <svg width="30" height="30">
                        <path d="M0,5 30,5"     stroke="#fff" stroke-width="4"/>
                        <path d="M0,15 30,15"   stroke="#fff" stroke-width="4"/>
                        <path d="M0,25 30,25"   stroke="#fff" stroke-width="4"/>
                    </svg>
                </div>   
            </nav>
        
               <script src="<?= $url_base ?>/_js/jquery.js"></script>
        <script>
            $(function() {
                $("div#menu-btn").click(function() {
                    $("nav ul#menu-mobile").toggle();
                });
                
                $(window).resize(function() {
                   var largura = $(window).width(); 
                    if ( largura >= 701 ) {
                        $("nav ul#menu-mobile").hide();   
                    }
                });
            });
            
            
        </script>