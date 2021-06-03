<?php

/**
 * 2.6: Polimorfismo
 * Permite que classes herdeiras modifiquem os atributos de uma
 * superclasse.
 * 
 * Essas são as mesmas classes da seção 2.5 apenas com as mudanças
 * necessárias para mostrar o polimorfismo.
*/

/**
 * Aqui a classe garrafa implementará uma função imprime que
 * será modificada nas classes filhas.
*/
class Garrafa{
    // Atributos que serão compartilhados
    var $capacidade;
    var $aberta;

    // Construtor
    function __construct($capacidade){
        $this->capacidade = $capacidade;
        $this->aberta = false;
    }

    // Métodos que serão compartilhados
    function abrir(){
        $this->aberta = true;
    }

    function fechar(){
        $this->aberta = false;
    }

    // Método que será modificado através do polimorfismo
    function imprime(){
        echo "Apenas uma garrafa.\n";
        echo "Capacidade: ".$this->capacidade."ml\n";
        echo "Aberta: ";
        if($this->aberta)
            echo "sim\n";
        else echo "não\n";
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

    // Sobrepões o método imprime() da classe garrafa.
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

// Objeto refrigerante
$objeto = new Phanta(500, 'laranja', 2);
$objeto->imprime();

// Objeto garrafa
echo "-----------------------------------------\n";
$objeto2 = new Garrafa(2000);
$objeto2->imprime();