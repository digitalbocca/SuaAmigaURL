<?php

namespace EstudioDigitalBocca\URLAmigavel\Interfaces;

use EstudioDigitalBocca\URLAmigavel\Interfaces\ObterValorInterface;
use EstudioDigitalBocca\URLAmigavel\Interfaces\AtualizarValorInterface;

/**
 * URLAmigavelInterface.php
 *
 * Nossas URLs Amigaveis devem implementar esta interface.
 * Obrigatóriamente devem ter um metodo para obter valor e outro para atualizar o valor.
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
interface URLAmigavelInterface extends ObterValorInterface, AtualizarValorInterface{
    //Metodos necessários para a implementação.
}
