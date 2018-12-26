<?php
if(isset($_SESSION['connect'])){
  require_once(PATH_MODELS.'ModelesDAO.php');
  require_once(PATH_ENTITY.'Modeles.php');
  $modelesDAO = new ModelesDAO();

  if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $modele = $modelesDAO->getModeleById($id);

    if($modele != null){
      if(isset($_POST['url']) && isset($_POST['nom']) && isset($_POST['prenom'])){
        $url = htmlspecialchars($_POST['url']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);

        $modele = new Modeles($id, $nom, $prenom, $url);
        if($modelesDAO->updateModele($modele)){
          header('location: ../?page='.$page.'&error=SUCCESSI&id='.$id);
        } else {
          header('location: ../?page='.$page.'&error=ERROR&id='.$id);
        }
      }
    } else {
      header('location: ../?page='.$page.'&error=ERROR');
    }

  } else {
    $alert = choixAlert('ERROR');
  }


  if(isset($_GET['error'])){
    $message = htmlspecialchars($_GET['error']);
    $alert = choixAlert($message);
  }

  require_once(PATH_VIEWS.$page.'.php');
} else {
  header('location: ../?page=connexion');
}
