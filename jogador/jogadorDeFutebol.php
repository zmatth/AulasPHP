<?php

class JogadorDeFutebol
{
private $nome;
private $energia = 100;
private $alegria = 0;
private $gols = 0;
private $experiência = 0;

public function __construct($nome)
{
    $this->nome = $nome;
}

public function fazerGol()
{
    $this->energia -= 5;
    $this->alegria += 10;
    $this->gols += 1;

    echo 'GOOOOOOOOOOOOOL <br>';
}

public function correr()
{
    $this->energia -= 10;
    echo 'Cansei <br>'; 
}

public function getNome()
{
    return $this->nome;
}

public function getExp()
{
    return $this->experiência . '<br>';
}

public function setExperiencia($experiencia)
{
    $this->experiência += $experiencia;
}
}