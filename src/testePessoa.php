<?php

require_once 'modelo/CPF.php';
require_once 'modelo/Pessoa.php';

$cpf = new CPF('311.739.488-56');
$cliente = new Pessoa($cpf,'Bruno Mendes de Faria'); 
var_dump($cliente);
echo $cliente->getCPF();

