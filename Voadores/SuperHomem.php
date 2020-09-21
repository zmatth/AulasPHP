<?php

class SuperHomem implements Voador
{

    private $xp = 0;

    public function voar()
    {
        echo 'Estou voando como um Campeao <br>';
        echo 'Experiencia atual : '.($this->xp += 3) . '<br><br>';
    }
}