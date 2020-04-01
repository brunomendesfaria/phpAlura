<?php 

namespace Alura\Banco\Modelo\Conta; 

class ContaCorrente extends Conta 
{
    public function percentualTarifa(): float
    {
        return 0.05;
    }

    public function tranfere(float $valorATransferir, Conta $contaDestino): void 
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->despositar($valorATransferir);
    }
}