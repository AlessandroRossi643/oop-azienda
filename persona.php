<?php
require_once 'compenso.php';

class Persona {

  use Compenso;

  public $nome;
  public $cognome;
  public $eta;
  public $indirizzoAbit;
  public $luogoNascita;
  public $dataNascita;
  protected $telefono;

  public function setTelefono($telefono){
    $this->telefono=$telefono;
  }

  public function getTelefono(){
    return $telefono;
  }

  function _construct($nomeP,$cognomeP,$etaP,$indirizzoAbitP){
    $this->nome = $nomeP;
    $this->cognome = $cognomeP;
    $this->eta = $etaP;
    $this->indirizzoAbit = $indirizzoAbitP;
  }
} ?>
