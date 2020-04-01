<?php
namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome, $endereco);
    }
}
