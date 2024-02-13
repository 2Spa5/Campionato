<?php

class Campionato
{

    protected $nome = "";
    protected $squadre = array();

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function addSquadre($squadre)
    {
        array_push($this->squadre, $squadre);
    }

    public function removeSquadre($squadre)
    {
        array_pop($this->squadre);
    }
}
