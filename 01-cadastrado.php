<!DOCTYPE HTML>
<html lan="ptb">
    <head>
        <meta charset="utf-8">
        <title>Tudo sobre Google Glass</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/form.css"/>
        <script  language="javascript" src="_javascript/funcoes.js"> </script>
    </head>
    
    <body>
        <div id="interface">
            <header id="cabecalho"> <!-- INICIO CABEÇALHO -->
                <hgsroup>
                   <h1>Google Glass</h1>
                    <h2>A revolução do Google está chegando</h2>
                </hgroup>

                <img id="icone" src="_imagens/glass-oculos-preto-peq.png"/>
    
                <nav id="menu">
                <h1>Principal</h1>
                    <ul type="disc">
                        <li onmousemove="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="index.html">Home</a></li> 
                        <li onmousemove="mudaFoto('_imagens/especificacoes.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="specs.html" target="_self">Especificações</a></li> 
                        <li onmousemove="mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fotos.html">Fotos</a></li> 
                        <li onmousemove="mudaFoto('_imagens/multimidia.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="multimidia.html">Multimídia</a></li>
                        <li onmousemove="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fale-conosco.html">Fale conosco</a></li>
                    </ul>
                </nav>
            </header> <!-- FIM CABEÇALHO -->
            <article>
                <header id="cabecalho_artigo">
                    <hgroup>
                        <h3>Fale Conosco > Contato</h3>
                        <h1>Formulário de Contato</h1>
                        <h2>por Eduardo Pinheiro</h2>
                        <h3 class="direita">Atualizado em 04/Julho/2016</h3>
                    </hgroup>            
                </header>
            </article>
            <div>
                
                
                <?php
    
                    $banco = "cadastro";
                    $conexao = @mysql_connect("localhost", "root", "edu1213346") or die(mysql_error());
                    mysql_select_db($banco) or die(mysql_error());

                ?>
             

                <?php 

                    $nome = $_POST["tName"];
                    $senha = $_POST["tSenha"];
                    $email = $_POST["tEmail"];
                    $sexo = $_POST["tSexo"];
                    $dnasc = $_POST["tNasc"];
                    $endereco = $_POST["tEnd"];
                    $numero = $_POST["tNum"];
                    $estado = $_POST["tEst"];
                    $cidade = $_POST["tCid"];
                    $urgencia = $_POST["tUrg"];
                    $menssagem = $_POST["tMsg"];
                    $pedido = $_POST["tPed"];
                    $cor = $_POST["tCor"];
                    $qtd = $_POST["tQtd"];
                    $preco = $_POST["tTot"];

                    $mysql = mysql_query("INSERT INTO tb_contatos(nome, senha, email, sexo, dnasc, endereco, numero, estado, 
                        cidade, urgencia, menssagem, pedido, cor, qtd, preco) VALUES('$nome', '$senha', '$email', '$sexo',  '$dnasc', '$endereco', '$numero', '$estado', '$cidade', '$urgencia', '$menssagem', 
                        '$pedido', '$cor', '$qtd', '$preco')" );

                        echo "<h1><span class='foco1'>Casdastrado com sucesso!</span></h1>";

            ?>

                <a href="javascript:history.go(-1)" class="botao">Voltar</a>
                <br/> <br/>
            </div>
            <footer id="rodape">
               <p>Copyright &copy; 2016 - by Eduardo Pinheiro<br>
               <a href="https://www.facebook.com/edu.pinheiro.1238" target="_blank">Facebook</a> | 
               <a href="https://www.instagram.com/edupinheiro20/" target="_blank">Instagram</a></p>
            </footer>
        </div>
    </body>
</html>