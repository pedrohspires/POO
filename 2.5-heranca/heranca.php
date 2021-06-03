<?php

/**
 * 2.5: Herança
 * Herança é a característica dada pelo compartilhamento de atributos
 * e métodos de uma classe com outra classe originadora (superclasses).
 * 
 * Esse princípio facilita o reuso de código.
*/

/**
 * A classe Garrafa será uma superclasse que dará origem à classes 
 * mais específicas
 * como marcas de refrigerante, vinhos e qualquer coisa que se
 * utilize de garrafas.
*/
class Garrafa{
    // Atributos que serão compartilhados
    var $capacidade;
    var $aberta;

    // Métodos que serão compartilhados
    function abrir(){
        $this->aberta = true;
    }

    function fechar(){
        $this->aberta = false;
    }
}


/**
 * Classe-filha da superclasse Garrafa
 * Nela já são especificados mais detalhes sobre
 * como a garrafa será usada.
 */
class Phanta extends Garrafa{
    // Atributos exclusivos de um refrigerante que é armazenada em uma garrafa
    var $sabor;
    var $valor;

    // Construtor
    function __construct($capacidade, $sabor, $valor){
        $this->capacidade = $capacidade; // atribui uma capacidade à garrafa, não ao refrigerante
        $this->sabor = $sabor; // atribui um sabor ao refrigerante
        $this->valor = $valor; // atribui um valor
        parent::fechar(); // chama o método fechar para definir o valor da garrafa como fechada
    }

    function imprime(){
        echo "Refrigerante Phanta.\n";
        echo "Quantidade: ".$this->capacidade."ml\n";
        echo "Sabor: ".$this->sabor."\n";
        echo "Valor: R$".$this->valor."\n";
    }
}


/**
 * Programa principal para testes
*/
$objeto = new Phanta(500, 'laranja', 2);
$objeto->imprime();