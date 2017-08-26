<?php

    require_once '../vendor/autoload.php';

    if(isset($_SERVER['REQUEST_URI'])){

        //CRIA UM OBJETO URLAmigavel
        $url = new EstudioDigitalBocca\URLAmigavel\URLAmigavel($_SERVER['REQUEST_URI']);

        //VALOR DA URI NA BARRA DE ENDEREÇO
        $barraDeEndereco = $url->obterValor();

        //VALOR DA URI SEM AS BARRAS INICIAL E FINAL
        $semBarras = $url->obterValor();

        //REMOVENDO UM NÍVEL DA URI
        $removeNivel = new EstudioDigitalBocca\URLAmigavel\RemovedorDeNivel($url,3);

        //VALOR DA URI COM OS NÍVEIS REMOVIDOS
        $nivelRemovido = $url->obterValor();

    }

?>

<!DOCTYPE html>

<!--
  /**
  * (c)2017 - Estúdio Digital Bocca
  *
  * index.php - Parte do Projeto digitalbocca/SuaAmigaURL
  * https://github.com/digitalbocca/SuaAmigaURL
  *
  * Exemplo: https://estudiodigitalbocca.com.br/labs/SuaAmigaURL
  *
  * Dependências:
  *
  * Paletas de Gradiente por: http://uigradients.com
  * GitHub Corners por: http://tholman.com/github-corners/
  * jQuery: https://jquery.com
  */
-->

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SuaAmigaURL</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">    <!-- Fonte Denk One - Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Denk+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/edb.css">
  </head>
  <body>
    <div class="container-fluid">
      <a href="https://github.com/digitalbocca/SuaAmigaURL" class="github-corner">
        <svg width="80" height="80" viewBox="0 0 250 250" style="fill:#fff; color:#67B26F; position: absolute; top: 0; border: 0; right: 0;">
          <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
          <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
          <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
        </svg>
      </a>
      <div class="row edb-gradient-url edb-texto edb-branco edb-sombra py-5">
        <div class="col">
          <h1 class="display-1 text-center">SuaAmigaURL</h1>
        </div>
      </div>
      <div class="row justify-content-center pt-3 pb-5">
        <div class="col col-md-6 text-center">
          <h3 class="py-4">Como usar em PHP:</h3>
          <p>Pegamos a URI usada na barra de endereços.</p>
          <script src="https://gist.github.com/digitalbocca/30eb3d66b96dcd8e1021f8e9b1467de2.js?file=RequestURI.md"></script>
          <p>Verificamos se existe uma URI, senão o script continua a execução normal.</p>
          <script src="https://gist.github.com/digitalbocca/30eb3d66b96dcd8e1021f8e9b1467de2.js?file=IfRequestURI.md"></script>
          <h3 class="py-4">Dentro do if (Nesta Página) utilizei estes códigos:</h3>
          <p>Crio um Objeto URLAmigavel (Veja o Cod das Classes no GitHub)</p>
          <script src="https://gist.github.com/digitalbocca/30eb3d66b96dcd8e1021f8e9b1467de2.js?file=CriaObjetoURLAmigavel.md"></script>
          <div class="alert alert-success" role="alert">
            Resultado: <strong><?php echo $barraDeEndereco; ?></strong>
          </div>
          <p>Neste exemplo precisei tirar três niveis da URI, então fiz a classe RemovedorDeNivel.</p>
          <script src="https://gist.github.com/digitalbocca/30eb3d66b96dcd8e1021f8e9b1467de2.js?file=RemoveNivelURI.md"></script>
          <div class="alert alert-success" role="alert">
            Resultado: <strong><?php echo $nivelRemovido; ?></strong>
          </div>
          <p><strong>DICA:</strong>Adicione alguma coisa depois do /somente/</p>
          <p><strong>EX:</strong>...somente/produtos/</p>
        </div>
      </div>
      <div class="row edb-gradient-url fixed-bottom">
        <div class="col text-center py-2 edb-branco">
          <p class="my-0">&copy;2017 - Est&uacute;dio Digital Bocca</p>
        </div>
      </div>
    </div>
  </body>
</html>
