<?php

/**
 * 2.3: Objeto
 * Objeto é uma estrutura dinâmica que tem como base
 * uma classe.
*/

// Carregando o arquivo da classe
require_once __DIR__.'/../classes/Produto.php';

// Criação do objeto
$produto = new Produto();

// Definindo alguns atributos
$produto->nome = 'Notebook';
$produto->descricao = 'i5 6gb';
$produto->preco = 2999.99;

// Executando o método para impressão
$produto->imprime();