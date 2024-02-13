<?php

class Giocatore
{

    protected $nome = "";
    protected $cognome = "";
    protected $numero = 0;
    protected $ruolo = "";
    protected $eta = 0;

    public function __construct($nome, $numero, $cognome, $eta, $ruolo)
    {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->ruolo = $ruolo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function getRuolo()
    {
        return $this->ruolo;
    }

    public function setRuolo($newRuolo)
    {
        $this->ruolo = $newRuolo;
    }

    public function setNumero($newNumero)
    {
        $this->numero = $newNumero;
    }

}
