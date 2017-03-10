<?php

namespace EstudioDigitalBocca\URLAmigavel\Interfaces;

/**
 * ObterValorInterface.php
 *
 * Interface de retorno de valores
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
interface ObterValorInterface {
    /**
     * Retorna o valor armazenado no objeto
     *
     * @return mixed valor armazenado pelo objeto.
     */
    public function obterValor();
}
