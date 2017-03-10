<?php

namespace EstudioDigitalBocca\URLAmigavel;

use EstudioDigitalBocca\URLAmigavel\Interfaces\URLAmigavelInterface;

/**
 * URLAmigavel.php
 *
 * Constroi uma entidade que guarda a URL Amigavel
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
class URLAmigavel implements URLAmigavelInterface {

    /**
     * Armazena o valor da URI
     *
     * @var string $valor
     */
    private $valor = '';

    /**
     * O valor da URI recebido.
     *
     * @param string $valorRecebido
     */
    public function __construct($valorRecebido){
        $this->valor = $valorRecebido;
    }

    /**
     * Atualiza o valor da URI
     *
     * @param string $valorRecebido
     */
    public function atualizarValor($valorRecebido){
        $this->valor = $valorRecebido;
    }

    /**
     * Retorna valor atual da URI.
     *
     * @return string
     */
    public function obterValor(){
       return $this->valor;
    }
}
