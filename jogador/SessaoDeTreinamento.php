<?php

class SessaoDeTreinamento
{
    private $experiencia = 1;


    public function treinar(JogadorDeFutebol $jogador)
    {
        echo 'Jogador: ' . $jogador->getNome(). '<br>';
        $jogador->correr();
        $jogador->fazerGol();
        $jogador->correr();
        
        echo 'Experiencia Inicial : ' . $jogador->getExp();
        $jogador->setExperiencia($this->experiencia);
        echo 'Experiencia Final : ' . $jogador->getExp();
        echo '<br><br>';
    }
}