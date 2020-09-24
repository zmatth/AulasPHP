<?php

class Conta
{
    private $numeroConta;
    private $saldo;
    private $titular;

    public function __construct($numeroConta, $saldo, Cliente $titular)
    {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->titular = $titular;
    }


    public function deposito($valorDep)
    {
        $this->saldo += $valorDep;
        echo 'Dono da conta: '. $this->titular->getNome() .'<br>' . ' Deposito realizado no valor de ' . $valorDep . ' o saldo atual é: ' . $this->saldo . '<br><br>';
    }

    public function saque($valorSaq)
    {   
        if($this->saldo < $valorSaq)
        {
            echo 'Senhor '.$this->titular->getNome().' Saldo insuficiente <br>';
            return false;
        }

        $this->saldo -= $valorSaq;
        echo 'Dono da conta: '.$this->titular->getNome() .'<br>' . ' Saque realizado no valor de ' . $valorSaq . ' o saldo atual é: ' . $this->saldo . '<br><br>';

    }
}