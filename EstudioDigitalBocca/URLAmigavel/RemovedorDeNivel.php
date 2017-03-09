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
        var_dump($this->primeiraPosicao);
        var_dump($this->ultimaPosicao);
        if($this->primeiraPosicao == "/" || $this->ultimaPosicao == "/"){
            throw new \Exception('As Barras devem ser removidas antes de remover os n&iacute;veis.');
        }
        $niveis = explode("/", $this->valor);
        $removeNivel = array_slice($niveis, $quantidade);
        $this->valor = implode("/", $removeNivel);
    }

    private function tentaRemoverNivel($quantidade){
        try{
            verificaBarras();
        }

        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    private function verificaBarras(){
        if($this->primeiraPosicao || $this->ultimaPosicao == '/'){
            throw new \Exception('As Barras devem ser removidas antes de remover os n&iacute;veis.');
        }
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
     *
     * @todo Fazer uma trait neste método pois ele é usado em outra classe
     *
     * @todo Remover este metodo e fazer a atualização do valor diretamente no
     * metodo construtor que recebe a instancia que implementa a interface AtualizaValor
     */
    private function atualizaValor(AtualizarValor $objeto){
        $objeto->atualizarValor($this->valor);
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
