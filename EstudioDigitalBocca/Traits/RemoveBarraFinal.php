<?php

namespace EstudioDigitalBocca\Traits;

/**
 * RemoveBarraFinal.php
 *
 * Remove a barra final de uma URI se for necessário.
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
trait RemoveBarraFinal {

    /**
     * Remove a barra final de uma URI se for necessário
     *
     * @param string $valor A string que será usada.
     * @return string A URI sem a barra final.
     */
    private function removeBarraFinal($valor){
        $ultimaPosicao = substr($valor, -1);
        if($ultimaPosicao == '/' ){
            $valor = substr($valor, 0, -1);
        }
        return $valor;
    }
}
