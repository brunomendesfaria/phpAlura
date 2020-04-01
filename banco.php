<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;

$endereco = new Endereco('Guararapes', 'Iguatemi', 'Rua Massao Myashita', '151');
$cpf        = new CPF('311.739.488-56');
$titular = new Titular($cpf, 'Bruno Mendes de Faria',$endereco);
$primeiraConta = new ContaCorrente($titular);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->getNomeTitular() . ' - ';
echo $primeiraConta->getCpfTitular() . ' - ';
echo 'R$'.$primeiraConta->getSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia',$endereco);
$segundaConta = new ContaPoupanca($patricia);
$segundaConta->deposita(500); 
$segundaConta->saca(300);
echo $segundaConta->getNomeTitular() . ' - ';
echo $segundaConta->getCpfTitular() . ' - ';
echo 'R$'.$segundaConta->getSaldo() . PHP_EOL;

$endereco = new Endereco ('Guararapes', 'Copacabana', 'Avenida Severino Poleto', '387');
$terceiraConta = new ContaPoupanca(new Titular(new CPF('123.654.789-01'), 'Abcdefg',$endereco));
unset($terceiraConta);
echo Conta::getNumeroDeContas();


