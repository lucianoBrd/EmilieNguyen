<?php
require_once(PATH_ENTITY.'Avis.php');
require_once('DAO.php');
class AvisDAO extends DAO{

  public function newAvis($avis){
    $requete = "INSERT INTO avis(avis_first_name, avis_name, avis_email, avis) VALUES(?, ?, ?, ?)";
    $donnees = array($avis->getFirstName(), $avis->getName(), $avis->getEmail(), $avis->getAvis());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function deleteAvisById($id){
    $avis = $this->getAvisById($id);
    $requete = "DELETE FROM avis WHERE avis_id = ?";
    $donnees = array($id);
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }

  public function get4Avis(){
    $requete = "SELECT * FROM avis ORDER BY rand() DESC LIMIT 0,4";
    $donnees = array();
    $res = $this->queryAll($requete, $donnees);
    if($res){
      $i = 0;
      $avisListe = array();
      foreach ($res as $avis) {
        $avisListe[$i] = new Avis($avis['avis_id'], $avis['avis_first_name'], $avis['avis_name'], $avis['avis_email'], $avis['avis'], $avis['avis_date']);
        $i++;
      }
      return $avisListe;
    }
    else return null;
  }

  public function getAvisById($id){
    $requete = "SELECT * FROM avis WHERE avis_id = ?";
    $donnees = array($id);
    $res = $this->queryRow($requete, $donnees);
    if($res){
      $avis = new Avis($res['avis_id'], $res['avis_first_name'], $res['avis_name'], $res['avis_email'], $res['avis'], $res['avis_date']);
      return $avis;
    }
    else return null;
  }

  public function getAvis(){
    $nbImages = $this->getNbAvis();

    $requete = "SELECT * FROM avis ORDER BY avis_id DESC LIMIT 10, ".$nbImages;
    $donnees = array();
    $res = $this->queryAll($requete, $donnees);
    if($res){
      $i = 0;
      $avisListe = array();
      foreach ($res as $avis) {
        $avisListe[$i] = new Avis($avis['avis_id'], $avis['avis_first_name'], $avis['avis_name'], $avis['avis_email'], $avis['avis'], $avis['avis_date']);
        $i++;
      }
      return $avisListe;
    }
    else return null;
  }

  public function getAllAvis(){
    $requete = "SELECT * FROM avis ORDER BY avis_id DESC";
    $donnees = array();
    $res = $this->queryAll($requete, $donnees);
    if($res){
      $i = 0;
      $avisListe = array();
      foreach ($res as $avis) {
        $avisListe[$i] = new Avis($avis['avis_id'], $avis['avis_first_name'], $avis['avis_name'], $avis['avis_email'], $avis['avis'], $avis['avis_date']);
        $i++;
      }
      return $avisListe;
    }
    else return null;
  }

  public function getNbAvis(){
    $requete = "SELECT COUNT( * ) AS nbavis FROM avis";
    $donnees = array();
    $res = $this->queryRow($requete, $donnees);
    if($res){
      return $res['nbavis'];
    }
    else return null;
  }
}
?>
