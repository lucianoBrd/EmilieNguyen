<?php

if(isset($_SESSION['connect'])){

  require_once(PATH_MODELS.'ModelesDAO.php');
  $modelesDAO = new ModelesDAO();

  if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $modelesDAO->deleteModeleById($id);

    header('location: ../?page=editModele');

  }
} else {
  header('location: ../?page=connexion');
}
