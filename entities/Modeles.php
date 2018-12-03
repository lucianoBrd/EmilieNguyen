<?php

class Modeles
{
  private $_modele_id;

  private $_modele_nom;

  private $_modele_prenom;

  private $_url;


  public function __construct($modele_id, $modele_nom, $modele_prenom, $url)
  {
    $this->_modele_id = $modele_id;
    $this->_modele_nom = $modele_nom;
    $this->_modele_prenom = $modele_prenom;
    $this->_url = $url;
  }

  public function getId() {
    return $this->_modele_id;
  }

  public function setId($modele_id){
    $this->_modele_id = $modele_id;
  }

  public function getNom() {
    return $this->_modele_nom;
  }

  public function setNom($modele_nom){
    $this->_modele_nom = $modele_nom;
  }

  public function getPrenom() {
    return $this->_modele_prenom;
  }

  public function setPrenom($modele_prenom){
    $this->_modele_prenom = $modele_prenom;
  }

  public function getUrl() {
    return $this->_url;
  }

  public function setUrl($url){
    $this->_url = $url;
  }
  
}
