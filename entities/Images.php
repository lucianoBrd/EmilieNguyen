<?php

class Images
{
  private $_img_id;

  private $_img_size;

  private $_img_type;

  private $_img_name;

  private $_link;

  private $_modele;

  private $_url;

  private $_description;

  public function __construct($img_id, $img_size, $img_type, $img_name, $link, $modele, $url, $description)
  {
    $this->_img_id = $img_id;
    $this->_img_size = $img_size;
    $this->_img_type = $img_type;
    $this->_img_name = $img_name;
    $this->_link = $link;
    $this->_modele = $modele;
    $this->_url = $url;
    $this->_description = $description;
  }

  public function getId() {
    return $this->_img_id;
  }

  public function setId($img_id){
    $this->_img_id = $img_id;
  }

  public function getSize() {
    return $this->_img_size;
  }

  public function setSize($img_size){
    $this->_img_size = $img_size;
  }

  public function getType() {
    return $this->_img_type;
  }

  public function setType($img_type){
    $this->_img_type = $img_type;
  }

  public function getName() {
    return $this->_img_name;
  }

  public function setName($img_name){
    $this->_img_name = $img_name;
  }

  public function getLink() {
    return $this->_link;
  }

  public function setLink($link){
    $this->_link = $link;
  }

  public function getModele() {
    return $this->_modele;
  }

  public function setModele($modele){
    $this->_modele = $modele;
  }

  public function getUrl() {
    return $this->_url;
  }

  public function setUrl($url){
    $this->_url = $url;
  }

  public function getDescription() {
    return $this->_description;
  }

  public function setDescription($description){
    $this->_description = $description;
  }
}
