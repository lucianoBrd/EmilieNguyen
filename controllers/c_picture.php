<?php

if(isset($_GET['id'])){

  $id = $_GET['id'];
  require_once(PATH_MODELS.'ImagesDAO.php');

  $imagesDAO = new ImagesDAO();

  $image = $imagesDAO->getImageById($id);

  if($image == null){
    header('location: ../');
  } else {
    require_once(PATH_VIEWS.$page.'.php');
  }
} else {
  header('location: ../');
}
