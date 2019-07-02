<?php
require_once 'persona.php';

class Dipendente extends Persona{

  protected $numeroMatricola;
  public $reparto;
  protected $tipologiaContratto;
  protected $durataContratto;
  public $livelloOperatore;

  public function setMatricola($numeroMatricola){
    $this->nmatricola = $numeroMatricola;
  }
  public function getMatricola(){
    return $numeroMatricola;
  }
}
?>
