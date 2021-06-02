<?php

/**
 * 2.2: Classe
 * Uma classe é uma estrutura estática que descreve um objeto através
 * da definição de atributos e métodos.
*/

class Pessoa{
    var $nome;
    var $idade;

    function imprime(){
        echo $this->nome.' '.$this->idade."\n";
    }
}