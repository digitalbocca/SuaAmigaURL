<?php

namespace EstudioDigitalBocca\Traits;

/**
 * RemoveBarraInicial.php
 *
 * Remove a barra inicial de uma URI se for necessário.
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
trait RemoveBarraInicial {

    /**
     * Remove a barra inicial de uma URI se for necessário
     *
     * @param string $valor A string que será usada.
     * @return string A URI sem a barra inicial.
     */
    private function removeBarraInicial($valor){
        $primeiraPosicao = substr($valor, 0, 1);
        if($primeiraPosicao == '/' ){
            $valor = substr($valor, 1);
        }
        return $valor;
    }
}
