<?php

class Prova
{
    private $dificuldade;
    private $energiaNecessaria;


    public function __construct($dificuldade, $energiaNecessaria)
    {
        $this->dificuldade = $dificuldade;
        $this->energiaNecessaria = $energiaNecessaria;
    }


    public function podeRealizar(Atleta $atleta)
    {
        if(($atleta->getNivel() >= $this->dificuldade )&&($atleta->getEnergia() >=  $this->energiaNecessaria))
        {
            echo 'Vai que é tua ' . $atleta->getNome() . '<br><br>';
            return TRUE;
        }
        else
        {
            echo 'Falta de energia ou nivel do: '.$atleta->getNome().' <br><br>';
            return FALSE;
        }
    }
}