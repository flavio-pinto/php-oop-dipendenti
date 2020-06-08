<?php
/**
 * CLASSE PRINCIPALE
 */

class Dipendente {
    //Proprietà
    public $nome;
    public $cognome;
    public $eta;
    public $contratto;
    public $stipendio;

    //Costruttore
    public function __construct($_nome, $_cognome, $_eta, $_contratto, $_stipendio) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->contratto = $_contratto;
        $this->stipendio = '€' . number_format($_stipendio, 2);
    }
}