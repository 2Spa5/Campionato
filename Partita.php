<?php

class Partita
{
    protected Squadra $squadra1;
    protected Squadra $squadra2;
    protected $risultato = array();

    public function __construct(Squadra $squadra1, Squadra $squadra2)
    {
        $this->squadra1 = $squadra1;
        $this->squadra2 = $squadra2;
        for ($i = 0; $i < 2; $i++)
            array_push($this->risultato, rand(0, 5));
    }

    public function assegnazionePunti()
    {
        if ($this->risultato[0] == $this->risultato[1]) {
            $this->squadra1->addPunti(1);
            $this->squadra2->addPunti(1);
        }

        if ($this->risultato[0] > $this->risultato[1])
            $this->squadra1->addPunti(3);

        if ($this->risultato[0] < $this->risultato[1])
            $this->squadra2->addPunti(3);
    }
}
