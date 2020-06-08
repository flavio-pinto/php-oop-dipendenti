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
        if (!is_int($this->piano) || !is_string($this->full_o_part_time)) {
            throw new Exception('È stato inserito un dato in formato non corretto');
        } else {
            return parent::print() . 
            '<br>' . 'Piano di competenza: ' . $this->piano . 
            '<br>' . 'Full-time o Part-time: ' . $this->full_o_part_time;
        };
    }
}

//Creo array Cameriere ai piani
$cameriere_ai_piani = [
    ['Lorena', 'Paoletti', 32, 'F', 'A tempo indeterminato', 1300, 1, 'Full-time'],
    ['Abigail', 'Gomez', 23, 'F', 'A tempo determinato', 1000, 1, 'Full-time'],
    ['Pia', 'Domenicali', 21, 'F', 'A tempo determinato', 800, 1, 'Part-time'],
    ['Katia', 'Sorano', 44, 'F', 'A tempo indeterminato', 1300, 2, 'Full-time'],
    ['Imma', 'Rosati', 20, 'F', 'A tempo determinato', 1000, 2, 'Full-time'],
    ['Giacoma', 'Pizzaioli', 58, 'F', 'A tempo determinato', 800, 2, 'Part-time'],
    ['Giulia', 'Cozza', 50, 'F', 'A tempo indeterminato', 1300, 3, 'Full-time'],
    ['Rebecca', 'Salino', 27, 'F', 'A tempo determinato', 1000, 3, 'Full-time'],
    ['Emma', 'Ludovini', 29, 'F', 'A tempo determinato', 800, 3, 'Part-time']
];

$lista_cameriere = [];

foreach($cameriere_ai_piani as $cameriera) {
    $lista_cameriere[] = new CamerieraAiPiani(...$cameriera);
}