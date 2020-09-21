<?php

class TorreControle
{
    private $listaVoadores;


    public function adicionarVoador(Voador $umvoador)
    {
        $this->listaVoadores[] = array($umvoador);
    }

    public function voemTodos(){


        foreach ($this->listaVoadores as $voador)
        {
            $voador[0]->voar();
        }

        echo '<hr>';

    }

   
}