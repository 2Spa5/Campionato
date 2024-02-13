<?php

class Squadra
{
    protected $nome = "";
    protected $allenatore = "";
    protected $rosa = array();
    protected $punti = 0;


    public function __construct($nome, $allenatore)
    {
        $this->nome = $nome;
        $this->allenatore = $allenatore;
    }

    public function addGiocatore(Giocatore $g)
    {
        array_push($this->rosa, $g);
    }

    public function removeGiocatore(Giocatore $g)
    {
        array_pop($this->rosa);
    }

    public function addPunti($punti)
    {
        $this->punti += $punti;
    }

    public function __toString()
    {
        $s = "Squadra - $this->nome <br>Allenatore - $this->allenatore<br>Giocatori<br><ul>";
        foreach ($this->rosa as $g)
            $s .= "<li>Nome: $g->nome, Numero: $g->numero</li>";
        $s .= "</ul>";
        return $s;
    }
}

?>
