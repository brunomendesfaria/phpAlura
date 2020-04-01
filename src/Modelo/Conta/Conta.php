<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta 
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;
    

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
       // self::$numeroDeContas--;
    }

    public function saca(float $valor): void
    {
        $tarifa  = $valor * $this->percentualTarifa();
        $valor = $valor + $tarifa;
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valor;
    }

    abstract public function percentualTarifa(): float;

    public function deposita(float $valor): void
    {
        if ($valor < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valor;
    }


    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string 
    {
        return $this->titular->getCPFPessoa();
    }

    public function getSaldo(): float 
    {
        return $this->saldo;
    }
}
