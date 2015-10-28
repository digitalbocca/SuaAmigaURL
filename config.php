<?php

    /**
     * Arquivo config.php
     * 
     * Configurações que são usadas frequentemente por todas as páginas
     *
     * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
     */
	
    //session_start();
   
    /**
     * AUTOLOAD PSR4
     */
    require_once 'autoload.php';
    
    /*
     * INSTANCIANDO O AUTOLOAD
     */
    $autoload = new Autoload();

    /*
     * REGISTRANDO O AUTOLOAD
     */
    $autoload->register();
    
    /*
     * ADICIONANDO OS NAMESPACES
     */
    
    $autoload->addNamespace('EstudioDigitalBocca\URLAmigavel', "EstudioDigitalBocca/URLAmigavel");
    
    /*
     * CONFIGURACAO DO BANCO DE DADOS
     */
    //$driver = 'mysql';
    //$host = 'localhost';
    //$dbname = 'exemplo';
    //$user = 'root';
    //$senha = '';
    
    /*
     * CONEXAO COM O BANCO DE DADOS
     */
    //$conectar = new \EstudioDigitalBocca\BancoDeDados\ConexaoPDO($driver, $host, $dbname, $user, $senha);