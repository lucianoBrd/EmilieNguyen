<?php
require_once(PATH_MODELS.'ImagesDAO.php');
require_once(PATH_MODELS.'ModelesDAO.php');
require_once(PATH_ENTITY.'Modeles.php');
require_once(PATH_ENTITY.'Images.php');
$modelesDAO = new ModelesDAO();
$imagesDAO = new ImagesDAO();

$modeles = $modelesDAO->getModeles();
$imagesListe = $imagesDAO->getAllImages();

if(isset($_FILES['image']) && $_FILES['image']['error'] == 0 && !empty($_POST['modele']) && !empty($_POST['url'])){

  $modele  = $_POST['modele'];
  $url   = $_POST['url'];
  $description = '';
  if(!empty($_POST['description'])){
    $description = $_POST['description'];
  }

  if($_FILES['image']['size'] <= 450000){
    $informationsImage = pathinfo($_FILES['image']['name']);
    $extentionImage    = $informationsImage['extension'];
    $extentionsAccepte = array('png', 'gif', 'jpg', 'jpeg');

    if(in_array($extentionImage, $extentionsAccepte)){
      $img_taille = $_FILES['image']['size'];
      $img_nom    = basename($_FILES['image']['name']);
      $nomUpload  = 'assets/images/upload/'.time().rand().rand().'.'.$extentionImage;
      move_uploaded_file($_FILES['image']['tmp_name'], $nomUpload);

      $image = new Images(null, $img_taille, $extentionImage, $img_nom, $nomUpload, $modele, $url, $description);
      if($imagesDAO->newImage($image)){
        header('location: ../?page='.$page.'&error=SUCCESS');
      } else {
        header('location: ../?page='.$page.'&error=ERROR');
      }
    } else header('location: ../?page='.$page.'&error=TYPE');
  } else header('location: ../?page='.$page.'&error=TAILLE');
} else if(isset($_FILES['image'])) {
  header('location: ../?page='.$page.'&error=ERROR');
}

if(isset($_GET['error'])){
  $message = htmlspecialchars($_GET['error']);
  $alert = choixAlert($message);
}

require_once(PATH_VIEWS.$page.'.php');
