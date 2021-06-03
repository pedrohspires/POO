<?php

/**
 * 2.3: Objeto
 * Objeto é uma estrutura dinâmica que tem como base
 * uma classe.
*/

// Carregando o arquivo da classe
require_once __DIR__.'/../classes/Carro.php';

// Criação do objeto
$carro = new Carro();

// Definindo alguns atributos
$carro->marca = 'VolksWagen';
$carro->modelo = 'Gol';
$carro->ano = 2021;

// Executando o método para impressão
$carro->imprime();