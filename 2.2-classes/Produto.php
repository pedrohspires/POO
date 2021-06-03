<?php

/**
 * 2.2: Classe
 * Uma classe é uma estrutura estática que descreve um objeto através
 * da definição de atributos e métodos.
*/

class Produto{
    var $nome;
    var $descricao;
    var $preco;

    function imprime(){
        echo $this->nome.' '.$this->descricao.' R$'.$this->preco."\n";
    }
}