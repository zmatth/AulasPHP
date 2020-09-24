<?php

class Tripe
{
private $dobrado;               //: indica o estado atual do tripé (dobrado ou não) 
private $alturaMinima = 100; 
private $alturaMaxima = 500; 
private $alturaAtual;


public function definirAltura($novaAltura)
{
    $this->alturaAtual = $novaAltura;
}

public function dobrar()
{
    $this->alturaAtual = ($this->alturaAtual / 2);
    $this->dobrado = TRUE;
}

public function desdobrar()
{
    $this->alturaAtual = ($this->alturaAtual * 2);
    $this->dobrado = FALSE;
}

public function guardar(Tripe $tripe)
{

}

public function prontoParaGuardar()
{

}

public function usar()
{

}

public function prontoParaUsar()
{

}


}