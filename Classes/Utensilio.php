<?php

abstract class Utensilio
{
    protected $categoria;

    public function __construct($categoria)
    {
        $this->categoria = $categoria;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }
}