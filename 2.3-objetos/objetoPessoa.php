<?php

/**
 * 2.3: Objeto
 * Objeto é uma estrutura dinâmica que tem como base
 * uma classe.
*/

// Carregando o arquivo da classe
require_once __DIR__.'/../classes/Pessoa.php';

// Criação do objeto
$pessoa = new Pessoa();

// Definindo alguns atributos
$pessoa->nome = 'Pedro Henrique';
$pessoa->idade = 21;

// Executando o método para impressão
$pessoa->imprime();