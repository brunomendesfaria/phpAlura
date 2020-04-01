<?php 

namespace Alura\Banco\Modelo;

class Endereco
{
    private string $cidade; 
    private string $bairro; 
    private string $rua; 
    private string $numero;
    private static int $codigo=0;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade; 
        $this->bairro = $bairro; 
        $this->rua = $rua; 
        $this->numero = $numero; 

        self::$codigo++;
    }

    public function getCidade(): string 
    {
        return $this->cidade;
    }

    public function getBairro(): string 
    {
        return $this->bairro;
    }

    public function getRua(): string 
    {
        return $this->rua;
    }

    public function getNumero():string {
        return $this->numero; 
    }
    
    public static function getCodigo(): int {
        return self::$codigo;
    }


}