<?php
include_once __DIR__ . '/Dipendente.php';

class Receptionist extends Dipendente {
    //Proprietà
    public $lingua_straniera_parlata;
    public $fascia_oraria;
    public $esperienza;

    //Costruttore
    public function __construct($_nome, $_cognome, $_eta, $_sesso, $_contratto, $_stipendio, $_lingua, $_fascia_oraria, $_esperienza) {
        parent::__construct($_nome, $_cognome, $_eta, $_sesso, $_contratto, $_stipendio);
        $this->lingua_straniera_parlata = $_lingua;
        $this->fascia_oraria = $_fascia_oraria;
        $this->esperienza = $_esperienza;
    }

    //Metodi
    public function print() {
        return parent::print() . 
        '<br>' . 'Lingua straniera parlata: ' . $this->lingua_straniera_parlata . 
        '<br>' . 'Fascia oraria: ' . $this->fascia_oraria . 
        '<br>' . 'Esperienza: ' . $this->esperienza;
    }
}