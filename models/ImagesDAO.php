<?php
require_once(PATH_ENTITY.'Images.php');
require_once(PATH_ENTITY.'Modeles.php');
require_once('DAO.php');
class ImagesDAO extends DAO{

  public function get10Images(){
    $requete = "SELECT * FROM images JOIN modeles ON images.modele=modeles.modele_id ORDER BY img_id DESC LIMIT 0,10";
    $donnees = array();
    $res = $this->queryAll($requete, $donnees);
    if($res){
      $i = 0;
      $imagesListe = array();
      foreach ($res as $image) {
        $imagesListe[$i][0] = new Images($image['img_id'], $image['img_size'], $image['img_type'], $image['img_name'], $image['link'], $image['modele'], $image['url_image'], $image['description']);
        $imagesListe[$i][1] = new Modeles($image['modele_id'], $image['modele_nom'], $image['modele_prenom'], $image['url_modele']);
        $i++;
      }
      return $imagesListe;
    }
    else return null;
  }

  public function getImages(){
    $requete = "SELECT * FROM images JOIN modeles ON images.modele=modeles.modele_id ORDER BY img_id DESC";
    $donnees = array();
    $res = $this->queryAll($requete, $donnees);
    if($res){
      $i = 0;
      $imagesListe = array();
      foreach ($res as $image) {
        $imagesListe[$i][0] = new Images($image['img_id'], $image['img_size'], $image['img_type'], $image['img_name'], $image['link'], $image['modele'], $image['url_image'], $image['description']);
        $imagesListe[$i][1] = new Modeles($image['modele_id'], $image['modele_nom'], $image['modele_prenom'], $image['url_modele']);
        $i++;
      }
      return $imagesListe;
    }
    else return null;
  }
}
?>
