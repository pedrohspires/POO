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

// Incluindo a classe copo
require_once __DIR__."/contrutores.php";

// Iniciando um novo objeto copo
$objeto = new Copo(500, false);

// Mostra alguns dados do objeto (alocado)
echo "Objeto construído: \n";
var_dump($objeto);

// Desalocar objeto da memória (executa método destrutor)
unset($objeto);
// ou
$objeto = NULL;

// Mostra alguns dados do objeto (já desalocaldo)
echo "\nObjeto após método destrutor: \n";
var_dump($objeto);