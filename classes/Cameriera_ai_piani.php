<?php
include_once __DIR__ . '/Dipendente.php';

class CamerieraAiPiani extends Dipendente {
    //Proprietà
    public $piano;
    public $full_o_part_time;

    //Costruttore
    public function __construct($_nome, $_cognome, $_eta, $_sesso, $_contratto, $_stipendio, $_piano, $_full_o_part_time) {
        parent::__construct($_nome, $_cognome, $_eta, $_sesso, $_contratto, $_stipendio);
        $this->piano = $_piano;
        $this->full_o_part_time = $_full_o_part_time;
    }

    //Metodi
    public function print() {
        return parent::print() . 
        '<br>' . 'Piano di competenza: ' . $this->piano . 
        '<br>' . 'Full-time o Part-time: ' . $this->full_o_part_time;
    }
}