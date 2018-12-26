<?php
require_once(PATH_ENTITY.'Modeles.php');
require_once('DAO.php');
class ModelesDAO extends DAO{

  public function newModele($modele){
    $requete = "INSERT INTO modeles(modele_nom, modele_prenom, url_modele) VALUES(?, ?, ?)";
    $donnees = array($modele->getNom(), $modele->getPrenom(), $modele->getUrl());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function deleteModeleById($id){
    $requete = "DELETE FROM modeles WHERE modele_id = ?";
    $donnees = array($id);
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function updateModele($modele){
    $requete = "UPDATE modeles SET modele_nom = ?, modele_prenom = ?, url_modele = ? WHERE modele_id = ?";
    $donnees = array($modele->getNom(), $modele->getPrenom(), $modele->getUrl(), $modele->getId());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function getModeles(){
    $requete = "SELECT * FROM modeles ORDER BY modele_prenom ASC";
    $donnees = array();
    $res = $this->queryAll($requete, $donnees);
    if($res){
      $modelesListe = array();
      foreach ($res as $modele) {
        $modelesListe[] = new Modeles($modele['modele_id'], $modele['modele_nom'], $modele['modele_prenom'], $modele['url_modele']);
      }
      return $modelesListe;
    }
    else return null;
  }

  public function getModeleById($id){
    $requete = "SELECT * FROM modeles WHERE modele_id = ?";
    $donnees = array($id);
    $res = $this->queryRow($requete, $donnees);
    if($res){
      return $modele = new Modeles($res['modele_id'], $res['modele_nom'], $res['modele_prenom'], $res['url_modele']);
    }
    else return null;
  }
}
?>
