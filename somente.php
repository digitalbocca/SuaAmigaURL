<?php

    require_once 'config.php';

    //echo phpinfo();

    echo $_SERVER['REQUEST_URI'];

    echo "<pre>";
    echo "GET que foi recebido pela p&aacute;gina: ";
    var_dump($_GET['slug']);
    echo "</pre>";

    if(isset($_GET['slug'])){

        /**
         * Cria uma nova instancia da URLAmigavel
         * $url = new \EstudioDigitalBocca\URLAmigavel\URLAmigavel($_GET['slug']);
         *
         * Para obter o valor correto e usar na sua pesquisa no banco de dados,
         * basta usar o método:
         * $url->obterValor();
         */

        $url = new \EstudioDigitalBocca\URLAmigavel\URLAmigavel($_GET['slug']);

        echo "<pre>";
        echo "Valor Passado no Endere&ccedil;o: ";
        echo $url->obterValor();
        echo "</pre>";

        $removeBarra = new \EstudioDigitalBocca\URLAmigavel\RemovedorDeBarra($url);

        echo "<pre>";
        echo "Valor Para a Pesquisa no Banco: ";
        echo $url->obterValor();
        echo "</pre>";

        echo "<pre>";
        echo "var_dump do valor final: ";
        echo var_dump($url->obterValor());
        echo "</pre>";

    }
