<?php
class carro{
    
    public $cor;
    
    public $modelo;

    public $velocidade = 0;

    function acelerar ($quanto){
        $this-> velocidade += $quanto;
    }

    function frear (){
        $this -> velocidade = 0;
    }

    function status (){
        echo $this ->modelo . " " . $this-> cor . " esta a " . $this ->velocidade . "km/h\n";
    }

    }
$meu_carro  =new carro();
$meu_carro -> cor = "azul";
$meu_carro -> modelo = "fiat";
$meu_carro -> acelerar(20);
$meu_carro -> status();









$carro_vizinho   =new carro();
$meu_carro -> cor = "prata ";
$meu_carro -> modelo = "toyota";
$meu_carro -> acelerar(20);
$meu_carro -> status();
