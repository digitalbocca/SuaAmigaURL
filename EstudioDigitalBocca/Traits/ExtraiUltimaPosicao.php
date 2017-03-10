<?php

namespace EstudioDigitalBocca\Traits;

/**
 * ExtraiUltimaPosicao.php
 *
 * Extrai a ultima posição de uma string
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
trait ExtraiUltimaPosicao {

    /**
     * Extrai a ultima posição de uma string
     *
     * @param string $valor A string que será usada.
     * @return string A ultima posição da string.
     */
    private function extraiUltimaPosicao($valor){
     return substr($valor, -1);
    }
}
