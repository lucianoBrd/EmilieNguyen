<?php
require_once(PATH_MODELS.'ImagesDAO.php');
$imagesDAO = new ImagesDAO();

if(isset($_GET['id'])){
  $id = htmlspecialchars($_GET['id']);
  $imagesDAO->deleteImageById($id);

  header('location: ../?page=edit');

}
