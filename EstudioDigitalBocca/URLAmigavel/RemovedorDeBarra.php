<?php

namespace EstudioDigitalBocca\URLAmigavel;

/**
 * Remove a barra do final da string se existir
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 */
class RemovedorDeBarra {
    
    private $valor = '';
    private $ultimaPosicao = '';
    
    private function removeBarra(){
        $this->valor = substr($this->valor, 0, -1);
    }
    
    private function verificarBarra(){
        if($this->ultimaPosicao == '/' ){
            $this->removeBarra();
        }
    }
    
    private function atualizaValor(AtualizarValor $objeto){
        $objeto->atualizarValor($this->valor);
    }
    
    private function extraiUltimaPosicao(){
        $this->ultimaPosicao = substr($this->valor, -1);
    }
    
    /**
     * Recebe um objeto que implementa a Interface ObterValor
     * e remove a barra do final da string obtida pelo metodo obterValor()
     * quando houver necessidade.
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
        $this->verificarBarra();
        $this->atualizaValor($objeto);
        //Acima há um erro, pois atualiza o valor mesmo se estiver sem a barra.
    }
}
