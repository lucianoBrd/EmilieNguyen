<?php

if(isset($_SESSION['connect'])){

  require_once(PATH_MODELS.'AvisDAO.php');
  require_once(PATH_ENTITY.'Avis.php');
  $avisDAO = new AvisDAO();

  if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $avisDAO->deleteAvisById($id);

    header('location: ../?page=editAvis&error=SUCCESSAD');

  } else {

    $nbAvis = $avisDAO->getNbAvis();

    $jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $avisListe = $avisDAO->getAllAvis();

  }
  if(isset($_GET['error'])){
    $message = htmlspecialchars($_GET['error']);
    $alert = choixAlert($message);
  }

  require_once(PATH_VIEWS.$page.'.php');
} else {
  header('location: ../?page=connexion');
}
