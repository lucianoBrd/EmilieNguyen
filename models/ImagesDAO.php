<?php
require_once(PATH_ENTITY.'Images.php');
require_once(PATH_ENTITY.'Modeles.php');
require_once('DAO.php');
class ImagesDAO extends DAO{

  public function newImage($image){
    $requete = "INSERT INTO images(img_size, img_type, img_name, link, modele, url_image, description) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $donnees = array($image->getSize(), $image->getType(), $image->getName(), $image->getLink(), $image->getModele(), $image->getUrl(), $image->getDescription());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function deleteImageById($id){
    $image = $this->getImageById($id);
    unlink($image[0]->getLink());
    $requete = "DELETE FROM images WHERE img_id = ?";
    $donnees = array($id);
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function updateImage($image){
    $requete = "UPDATE images SET img_size = ?, img_type = ?, img_name = ?, link = ?, modele =?, url_image = ?, description = ? WHERE img_id = ?";
    $donnees = array($image->getSize(), $image->getType(), $image->getName(), $image->getLink(), $image->getModele(), $image->getUrl(), $image->getDescription(), $image->getId());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function get10Images(){
    $requete = "SELECT * FROM images LEFT JOIN modeles ON images.modele=modeles.modele_id ORDER BY img_id DESC LIMIT 0,10";
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

  public function getImageById($id){
    $requete = "SELECT * FROM images LEFT JOIN modeles ON images.modele=modeles.modele_id WHERE img_id = ?";
    $donnees = array($id);
    $res = $this->queryRow($requete, $donnees);
    if($res){
      $image = array();
      $image[0] = new Images($res['img_id'], $res['img_size'], $res['img_type'], $res['img_name'], $res['link'], $res['modele'], $res['url_image'], $res['description']);
      $image[1] = new Modeles($res['modele_id'], $res['modele_nom'], $res['modele_prenom'], $res['url_modele']);
      return $image;
    }
    else return null;
  }

  public function getImages(){
    $nbImages = $this->getNbImages();

    $requete = "SELECT * FROM images LEFT JOIN modeles ON images.modele=modeles.modele_id ORDER BY img_id DESC LIMIT 10, ".$nbImages;
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

  public function getAllImages(){
    $requete = "SELECT * FROM images LEFT JOIN modeles ON images.modele=modeles.modele_id ORDER BY img_id DESC";
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

  public function getNbImages(){
    $requete = "SELECT COUNT( * ) AS nbimages FROM images";
    $donnees = array();
    $res = $this->queryRow($requete, $donnees);
    if($res){
      return $res['nbimages'];
    }
    else return null;
  }
}
?>
