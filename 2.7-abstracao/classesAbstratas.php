<?php

/**
 * Uma classe abstrata é uma classe que nunca serão usadas de fato. Ou seja,
 * apenas as classes que herdam uma classe abstrata que dará origem a algum objeto.
 */


/**
 * A classe foguete será uma classe abstrata. Ela definirá algumas características
 * de um foguete e apenas as classes que vão herdar ela, que serão mais específicas,
 * que serão usadas como objetos.
 */
abstract class Foguete{
    var $empuxo;
    var $cargaMaxima;
    
    function __construct($empuxo, $cargaMaxima){
        $this->empuxo = $empuxo;
        $this->cargaMaxima = $cargaMaxima;
    }
}


/**
 * Classes que herda a classe foguete e que será instanciada como objeto
 */
class falcon9 extends Foguete{
    var $nome;
    var $empresa;
    var $lancamentos;
    var $pousos;

    function __construct($lancamentos, $pousos, $empuxo, $cargaMaxima){
        $this->nome = "falcon 9";
        $this->empresa = "SpaceX";
        $this->lancamentos = $lancamentos;
        $this->pousos = $pousos;
        parent::__construct($empuxo, $cargaMaxima);
    }

    function imprime(){
        echo "Nome: $this->nome\n";
        echo "Empresa: $this->empresa\n";
        echo "Lancamentos: $this->lancamentos\n";
        echo "Pousos: $this->pousos\n";
        echo "Empuxo: $this->empuxo kN\n";
        echo "cargaMaxima: $this->cargaMaxima kg\n";
    }
}

class saturnV extends Foguete{
    var $nome;
    var $altura;
    var $lancamentos;
    var $missoes;

    function __construct($empuxo, $cargaMaxima){
        $this->nome = "Saturn V";
        $this->altura = 110.6;
        $this->lancamentos = 13;
        $this->missoes = "Apollo e Skylab";
        parent::__construct($empuxo, $cargaMaxima);
    }

    function imprime(){
        echo "Nome: $this->nome\n";
        echo "Altura: $this->altura\n";
        echo "Quantidade de lançamentos: $this->lancamentos\n";
        echo "Usado nas missões: $this->missoes\n";
        echo "Empuxo: $this->empuxo kN\n";
        echo "cargaMaxima: $this->cargaMaxima kg\n";
    }
}


// Objetos
$obj1 = new falcon9(119, 79, 845, 22800);
$obj2 = new saturnV(33375006.66, 118000);

$obj1->imprime();
echo "\n";
$obj2->imprime();