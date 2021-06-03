<?php

/**
 * 2.4: Construtores e destrutores
 * Contrutor é um método especial utilizado para definir
 * o comportamento inicial de um objeto.
 * Ele é executado automaticamente ao criar um objeto e
 * nunca deve ter um retorno.
 * Caso um construtor não seja definido pelo programador,
 * todos os atributos serão iniciados com NULL
 * 
 * Destrutor também é um método especial executado automaticamente,
 * porém ao desalocar o objeto de memória com "unset()" ou ao
 * atribuir NULL ao mesmo.
 */

class Copo{
    var $capacidade;
    var $cheio;

    /**
     * Método construtor que define as condições iniciais
     * do objeto. Pode receber parâmetros.
     * 
     * Momento em que o método construtor é chamado: 
     * $objeto = new Copo();
    */
    // function __construct(){
    //     $this->capacidade = 500;
    //     $this->cheio = false;
    // }

    /**
     * Exemplo de método construtor com parâmetros
     * Para testes, este exemplo deve ser comentado,
     * pois uma classe adimite apenas UM construtor.
     * 
     * Momento em que o método construtor é chamado: 
     * $objeto = new Copo(500, false);
     */
    function __construct($capacidade, $cheio){
        $this->capacidade = $capacidade;
        $this->cheio = $cheio;
    }
}