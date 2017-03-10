<?php

namespace EstudioDigitalBocca\Traits;

/**
 * ExtraiPrimeiraPosicao.php
 *
 * Extrai a primeira posição de uma string
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
trait ExtraiPrimeiraPosicao {

    /**
     * Extrai a primeira posição de uma string
     *
     * @param string $valor A string que será usada.
     * @return string A primeira posição da string.
     */
    private function extraiPrimeiraPosicao($valor){
        return substr($valor, 0, 1);
    }
}
