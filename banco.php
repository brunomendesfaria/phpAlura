<?php

require_once 'src/Conta.php';
require_once 'Pessoa.php';
require_once 'CPF.php';

$cpf1 = new CPF('123.456.789-10');
$pessoa1 = new Pessoa($cpf1, 'Vinicius Dias');
$conta1 = new Conta($pessoa1);
var_dump($pessoa1);
var_dump($conta1);

//cho "Saldo primeira conta ". $conta1->getNome().''.$conta1->getSaldo() .PHP_EOL;


//$conta2 = new Conta('123.456.789-10', 'Bruno');
//echo "Saldo primeira conta ". $conta2->getNome().''.$conta2->getSaldo() .PHP_EOL;


/*$conta1->deposita(500);
$conta1->saca(300); // isso é ok

echo $conta1->getNome() . PHP_EOL;
echo $conta1->getCPF() . PHP_EOL;
echo $conta1->getSaldo() . PHP_EOL;
echo "Saldo primeira conta ". $conta1->getSaldo() .PHP_EOL;

$conta2 = new Conta('698.549.548-10', 'Patricia');
var_dump($conta2);

$outra = new Conta('123', 'Abcdefg');

unset($conta2);
echo Conta::recuperaNumeroDeContas();
*/

