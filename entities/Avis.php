<?php

class Avis
{
  private $_avis_id;

  private $_avis_first_name;

  private $_avis_name;

  private $_avis_email;

  private $_avis;

  private $_avis_date;

  public function __construct($avis_id, $_avis_first_name, $avis_name, $_avis_email, $_avis, $_avis_date)
  {
    $this->_avis_id = $avis_id;
    $this->_avis_first_name = strtolower($_avis_first_name);
    $this->_avis_name = strtolower($avis_name);
    $this->_avis_email = strtolower($_avis_email);
    $this->_avis = $_avis;
    $this->_avis_date = $_avis_date;
  }

  public function getId() {
    return $this->_avis_id;
  }

  public function setId($avis_id){
    $this->_avis_id = $avis_id;
  }

  public function getFirstName() {
    return ucfirst($this->_avis_first_name);
  }

  public function setFirstName($_avis_first_name){
    $this->_avis_first_name = strtolower($_avis_first_name);
  }

  public function getName() {
    return ucfirst($this->_avis_name);
  }

  public function setName($avis_name){
    $this->_avis_name = strtolower($avis_name);
  }

  public function getEmail() {
    return $this->_avis_email;
  }

  public function setEmail($_avis_email){
    $this->_avis_email = strtolower($_avis_email);
  }

  public function getAvis() {
    return $this->_avis;
  }

  public function setAvis($_avis){
    $this->_avis = $_avis;
  }

  public function getDate() {
    return strtotime($this->_avis_date);
  }

  public function setDate($_avis_date){
    $this->_avis_date = $_avis_date;
  }
}
