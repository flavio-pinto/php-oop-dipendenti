<?php
/**
 * CLASSE PRINCIPALE
 */

class Dipendente {
    //Proprietà
    public $nome;
    public $cognome;
    public $eta;
    public $sesso;
    public $contratto;
    public $stipendio;

    //Costruttore
    public function __construct($_nome, $_cognome, $_eta, $_sesso, $_contratto, $_stipendio) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->sesso = $_sesso;
        $this->contratto = $_contratto;
        $this->stipendio = $_stipendio;
    }

    //Metodi
    public function print() {
        if (!is_string($this->nome) || !is_string($this->cognome) || !is_int($this->eta) || !is_string($this->sesso) || !is_string($this->contratto) || !is_int($this->stipendio)) {
            throw new Exception('È stato inserito un dato in formato non corretto!');
        } else {
            return  'Nome: ' . $this->nome . '<br>' . 
            'Cognome: ' . $this->cognome . '<br>' . 
            'Età: ' . $this->eta . '<br>' . 
            'Sesso: ' . $this->sesso . '<br>' . 
            'Contratto: ' . '€' . $this->contratto . '<br>' . 
            'Stipendio: €:' . number_format($this->stipendio, 2);
        }
    }
}


// $dipendente1 = new Dipendente('Pippo', 'Baudo', 90, 'A tempo indeterminato', 1000);
// echo $dipendente1->print();