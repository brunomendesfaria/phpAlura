<?php

class Conta
{
    private Pessoa $pessoa;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
       // self::$numeroDeContas--;
    }

    public function saca(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valor;
    }

    public function deposita(float $valor): void
    {
        if ($valor < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valor;
    }

    public function transfere(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
