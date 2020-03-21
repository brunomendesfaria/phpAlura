<?php

require_once 'Pessoa.php';

$cliente = new Pessoa('311.739.488-56','Bruno Mendes de Faria'); 
var_dump($cliente);
echo $cliente->getCPF();

