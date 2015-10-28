<?php

namespace EstudioDigitalBocca\URLAmigavel;

/**
 * Constroi uma entidade que guarda a URL Amigavel
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 */
class URLAmigavel implements \EstudioDigitalBocca\URLAmigavel\ObterValor,
                             \EstudioDigitalBocca\URLAmigavel\AtualizarValor {
    
    private $valor = '';
    
    /**
     * 
     * @param string $valorRecebido O valor da URLAmigavel
     */
    public function __construct($valorRecebido){
        $this->valor = $valorRecebido;
    }
    
    /**
     * 
     * @param string $valorRecebido O valor que vai ser atualizado
     */
    public function atualizarValor($valorRecebido){
        $this->valor = $valorRecebido;
    }
    
    /**
     * 
     * @return string O valor atual da URLAmigavel
     */
    public function obterValor(){
       return $this->valor; 
    }
}
