<?php 

class Pessoa{ 
    private static  $codigo=0;
    private CPF  $cpf;
    private string  $nome;

    public function __construct(CPF $cpf, string $nome) 
    {
        $this->cpf = $cpf;
         $this->validaNome($nome);
        $this->nome = $nome;

        self::$codigo++;
    }

    private function validaNome(string $nome)   
    {
        if(strlen($nome)<5){
            echo "Nome tem que ter mais de 5 caracteres" .PHP_EOL;
            exit();
        }
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

}