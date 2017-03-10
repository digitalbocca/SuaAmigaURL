<?php

namespace EstudioDigitalBocca\URLAmigavel;


/**
 * Precisa estar com as barras iniciais e finais removidas
 *
 */
class RemovedorDeNivel {

    private $valor = '';
    private $primeiraPosicao ='';
    private $ultimaPosicao = '';

    private function removeNivel($quantidade){
        if($this->primeiraPosicao == "/" || $this->ultimaPosicao == "/"){
            throw new \Exception('As Barras devem ser removidas antes de remover os n&iacute;veis.');
        }

        $niveis = explode("/", $this->valor);
        $removeNivel = array_slice($niveis, $quantidade);
        $this->valor = implode("/", $removeNivel);
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

    public function __construct(ObterValor $objeto, $quantidade){
        $this->valor = $objeto->obterValor();
        $this->extraiPrimeiraPosicao();
        $this->extraiUltimaPosicao();

        try{
            $this->removeNivel($quantidade);
        }
        catch(\Exception $e){
            echo $e->getMessage();
        }

        $objeto->atualizarValor($this->valor);
    }

}
