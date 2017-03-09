<?php

namespace EstudioDigitalBocca\URLAmigavel;

/**
 * Remove a barra do início e do final da string se existir
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 */
class RemovedorDeBarra {

    private $valor = '';
    private $ultimaPosicao = '';
    private $primeiraPosicao = '';

    private function removeBarraInicial(){
        $this->valor = substr($this->valor, 1);
    }

    private function removeBarraFinal(){
        $this->valor = substr($this->valor, 0, -1);
    }

    private function verificarBarraFinal(){
        if($this->ultimaPosicao == '/' ){
            $this->removeBarraFinal();
        }
    }

    private function verificarBarraInicial(){
        if($this->primeiraPosicao == '/' ){
            $this->removeBarraInicial();
        }
    }

    /**
     * @todo Remover este metodo e fazer a atualização do valor diretamente no
     * metodo construtor que recebe a instancia que implementa a interface AtualizaValor
     */
    private function atualizaValor(AtualizarValor $objeto){
        $objeto->atualizarValor($this->valor);
    }

    /**
     *
     * @todo Fazer uma trait neste método pois ele é usado em outra classe
     */
    private function extraiUltimaPosicao(){
        $this->ultimaPosicao = substr($this->valor, -1);
    }

    /**
     *
     * @todo Fazer uma trait neste método pois ele é usado em outra classe
     */
    private function extraiPrimeiraPosicao(){
        $this->primeiraPosicao = substr($this->valor, 0, 1);
    }

    /**
     * Recebe um objeto que implementa a Interface ObterValor
     * e remove a barra do início e do final da string obtida pelo metodo
     * obterValor() quando houver necessidade.
     *
     * Caso não haja necessidade a string do objeto permanece a mesma sem
     * nenhum prejuizo e sem disparar nenhuma excessão.
     *
     * @param \EstudioDigitalBocca\URLAmigavel\ObterValor $objeto
     *     Objeto que implementa a Interface ObterValor
     */
    public function __construct(ObterValor $objeto){
        $this->valor = $objeto->obterValor();
        $this->extraiUltimaPosicao();
        $this->extraiPrimeiraPosicao();
        $this->verificarBarraFinal();
        $this->verificarBarraInicial();
        $this->atualizaValor($objeto);
    }
}
