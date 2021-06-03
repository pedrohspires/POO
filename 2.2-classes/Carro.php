<?php

/**
 * 2.2: Classe
 * Uma classe é uma estrutura estática que descreve um objeto através
 * da definição de atributos e métodos.
*/

class Carro{
    var $marca;
    var $modelo;
    var $ano;

    function imprime(){
        echo $this->marca.' '.$this->modelo.' '.$this->ano."\n";
    }
}