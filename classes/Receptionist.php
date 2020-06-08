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

//Creo array Receptionists
$receptionists = [
    ['Pierpaolo', 'Gennargentu', 50, 'M', 'A tempo indeterminato', 1600, 'Arabo', 'Giorno', 'Senior'],
    ['Francesca', 'Paoletti', 24, 'F', 'A tempo determinato', 1200, 'Inglese', 'Giorno', 'Junior'],
    ['Chiara', 'Belotti', 21, 'F', 'A tempo indeterminato', 1600, 'Inglese', 'Pomeriggio', 'Senior'],
    ['Daniela', 'Costa', 23, 'F', 'A tempo determinato', 1200, 'Francese', 'Pomeriggio', 'Junior'],
    ['Maurizio', 'Rinaldi', 30, 'M', 'A tempo indeterminato', 1800, 'Francese', 'Notte', 'Senior'],
    ['Uvuvwevwevwe Onyetenyevwe Ugwemubwem', 'Ossas', 32, 'M', 'A tempo determinato', 1400, 'Arabo', 'Notte', 'Junior']
];

//Creo nuovo array per pushare istanze tramite ciclo
$lista_receptionists = [];

foreach($receptionists as $receptionist) {
    $lista_receptionists[] = new Receptionist(...$receptionist);
}

var_dump($lista_receptionists);