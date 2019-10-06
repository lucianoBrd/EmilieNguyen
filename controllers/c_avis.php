<?php
require_once(PATH_MODELS.'AvisDAO.php');
require_once(PATH_ENTITY.'Avis.php');
$avisDAO = new AvisDAO();

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['avis'])){
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $avis_desc = htmlspecialchars($_POST['avis']);

  $avis = new Avis(NULL, $nom, $prenom, $email, $avis_desc, NULL);
  if($avisDAO->newAvis($avis)){
    header('location: ../?page='.$page.'&error=SUCCESSA');
  } else {
    header('location: ../?page='.$page.'&error=ERROR');
  }
}

if(isset($_GET['error'])){
  $message = htmlspecialchars($_GET['error']);
  $alert = choixAlert($message);
}

$nbAvis = $avisDAO->getNbAvis();

$jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$avisListe = $avisDAO->getAllAvis();

require_once(PATH_VIEWS.$page.'.php');
