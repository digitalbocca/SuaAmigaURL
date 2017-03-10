<?php

namespace EstudioDigitalBocca\URLAmigavel\Interfaces;

/**
 * AtualizarValorInterface.php
 *
 * Interface para Atualizar o valor armazenado em um objeto.
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
interface AtualizarValorInterface {
    /**
     * Recebe o valor que será atualizado no Objeto.
     *
     * @param mixed $valorRecebido
     * @return void
     */
    public function atualizarValor($valorRecebido);
}
