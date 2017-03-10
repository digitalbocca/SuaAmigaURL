<?php

namespace EstudioDigitalBocca\URLAmigavel;

//Traits
use EstudioDigitalBocca\Traits\RemoveBarraInicial;
use EstudioDigitalBocca\Traits\RemoveBarraFinal;

//Interfaces
use EstudioDigitalBocca\URLAmigavel\Interfaces\URLAmigavelInterface;

/**
 * RemovedorDeBarras.php
 *
 * Remove as barras inicial e final de uma URI
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2017, Estúdio Digital Bocca
 * @since v0.12.0 EDB Framework
 * @version v1.0.0
 */
class RemovedorDeBarras {

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
     * Recebe um objeto que implementa a Interface ObterValor
     * e remove a barra do início e do final da string obtida pelo metodo
     * obterValor() quando houver necessidade.
     *
     * Caso não haja necessidade a string do objeto permanece a mesma sem
     * nenhum prejuizo e sem disparar nenhuma excessão.
     *
     * @see EstudioDigitalBocca\URLAmigavel\Interfaces\URLAmigavelInterface
     * @param object $objeto Objeto que implementa a Interface URLAmigavel
     * @return void
     */
    public function __construct(URLAmigavelInterface $objeto){
        $this->valor = $objeto->obterValor();
        $this->valor = $this->removeBarraInicial($this->valor);
        $this->valor = $this->removeBarraFinal($this->valor);
        $objeto->atualizarValor($this->valor);
    }
}
