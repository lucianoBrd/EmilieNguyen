<?php
if(isset($_SESSION['connect'])){
  require_once(PATH_MODELS.'ModelesDAO.php');
  require_once(PATH_ENTITY.'Modeles.php');
  $modelesDAO = new ModelesDAO();

  $modeles = $modelesDAO->getModeles();

  if(isset($_POST['url']) && isset($_POST['nom']) && isset($_POST['prenom'])){
    $url = htmlspecialchars($_POST['url']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);

    $modele = new Modeles(null, $nom, $prenom, $url);
    if($modelesDAO->newModele($modele)){
      header('location: ../?page='.$page.'&error=SUCCESS');
    } else {
      header('location: ../?page='.$page.'&error=ERROR');
    }
  }

  if(isset($_GET['error'])){
    $message = htmlspecialchars($_GET['error']);
    $alert = choixAlert($message);
  }

  require_once(PATH_VIEWS.$page.'.php');
} else {
  header('location: ../?page=connexion');
}
