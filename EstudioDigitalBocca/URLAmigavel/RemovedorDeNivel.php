<?php

namespace EstudioDigitalBocca\URLAmigavel;

//Traits
use EstudioDigitalBocca\Traits\RemoveBarraInicial;
use EstudioDigitalBocca\Traits\RemoveBarraFinal;

//Interfaces
use EstudioDigitalBocca\URLAmigavel\Interfaces\URLAmigavelInterface;

/**
 * RemovedorDeNivel.php
 *
 * Remove o numero indicado de níveis da URI.
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
class RemovedorDeNivel {

    /**
     * Recebe o valor da URI
     *
     * @var string $valor
     */
    private $valor = '';

    /**
     * Remove a barra inicial se for necessário.
     *
     * @uses EstudioDigitalBocca\Traits\RemoveBarraInicial
     * @param string A string que contem a URI.
     * @return string A URI sem a Barra Inicial.
     */
    use RemoveBarraInicial;

    /**
     * Remove a barra final se for necessário.
     *
     * @uses EstudioDigitalBocca\Traits\RemoveBarraFinal
     * @param string A string que contem a URI.
     * @return string A URI sem a Barra Final.
     */
    use RemoveBarraFinal;

    /**
     * Remove o número indicado de niveis da URI.
     *
     * @param int $quantidade A quantidade de níveis que serão extraidos.
     * @return void
     */
    private function removeNivel($quantidade){
        $niveis = explode("/", $this->valor);
        $removeNivel = array_slice($niveis, $quantidade);
        $this->valor = implode("/", $removeNivel);
    }

    /**
     * Recebe um objeto que implementa a Interface ObterValor,
     * remove a barra do início e do final da string obtida pelo metodo
     * obterValor() quando houver necessidade e retira os níveis solicitados.
     *
     * @see EstudioDigitalBocca\URLAmigavel\Interfaces\URLAmigavelInterface
     * @param object $objeto Objeto que implementa a Interface URLAmigavel
     * @return void
     */
    public function __construct(URLAmigavelInterface $objeto, $quantidade){
        $this->valor = $objeto->obterValor();
        $this->valor = $this->removeBarraInicial($this->valor);
        $this->valor = $this->removeBarraFinal($this->valor);
        $this->removeNivel($quantidade);
        $objeto->atualizarValor($this->valor);
    }

}
