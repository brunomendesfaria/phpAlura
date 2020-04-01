<?php 

namespace Alura\Banco\Modelo;

class Pessoa{ 
    private static  $codigo=0;
    private CPF $cpf;
    private Endereco $endereco;
    private string  $nome;


    public function __construct(CPF $cpf, string $nome, Endereco $endereco) 
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;

        self::$codigo++;
    }

    protected function validaNome(string $nome)   
    {
        if(strlen($nome)<5){
            echo "Nome tem que ter mais de 5 caracteres" .PHP_EOL;
            exit();
        }
    }

    public function getCPFPessoa(): string
    {
        return $this->cpf->getCPF();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

}