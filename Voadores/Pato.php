<?php

class Pato implements Voador
{

    private $energiaInicial = 100;

    public function voar()
    {
        echo 'Estou voando como um pato <br>';
        echo 'energia restante do pato: ' . ($this->energiaInicial -= 5) . '<br><br>';
    }
}