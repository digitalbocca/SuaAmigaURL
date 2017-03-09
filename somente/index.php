<?php

    require_once '../vendor/autoload.php';

    echo $_SERVER['REQUEST_URI'];

    if(isset($_SERVER['REQUEST_URI'])){

        /**
         * Cria uma nova instancia da URLAmigavel
         * $url = new \EstudioDigitalBocca\URLAmigavel\URLAmigavel($_GET['slug']);
         *
         * Para obter o valor correto e usar na sua pesquisa no banco de dados,
         * basta usar o método:
         * $url->obterValor();
         */

        $url = new EstudioDigitalBocca\URLAmigavel\URLAmigavel($_SERVER['REQUEST_URI']);

        echo "<pre>";
        echo "Valor Passado no Endere&ccedil;o: ";
        echo $url->obterValor();
        echo "</pre>";

        $removeBarra = new EstudioDigitalBocca\URLAmigavel\RemovedorDeBarra($url);

        echo "<pre>";
        echo "Valor Para a Pesquisa no Banco: ";
        echo $url->obterValor();
        echo "</pre>";

        echo "<pre>";
        echo "var_dump do valor final: ";
        echo var_dump($url->obterValor());
        echo "</pre>";

        $removeNivel = new EstudioDigitalBocca\URLAmigavel\RemovedorDeNivel($url,1);
        echo "<pre>";
        echo "Removendo um Nível: ";
        echo $url->obterValor();
        echo "</pre>";

    }
