<?php
require_once(PATH_MODELS.'ImagesDAO.php');
require_once(PATH_MODELS.'ModelesDAO.php');
require_once(PATH_ENTITY.'Modeles.php');
require_once(PATH_ENTITY.'Images.php');
$modelesDAO = new ModelesDAO();
$imagesDAO = new ImagesDAO();

if(isset($_GET['id'])){
  $id = htmlspecialchars($_GET['id']);
  $modeles = $modelesDAO->getModeles();
  $image = $imagesDAO->getImageById($id);

  if($image != null){
    if(!empty($_POST['modele']) && !empty($_POST['url'])){

      $modele  = $_POST['modele'];
      $url   = $_POST['url'];
      $description = '';
      if(!empty($_POST['description'])){
        $description = $_POST['description'];
      }

      $newImage = new Images($id, $image[0]->getSize(), $image[0]->getType(), $image[0]->getName(), $image[0]->getLink(), $modele, $url, $description);
      if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        if($_FILES['image']['size'] <= 450000){
          $informationsImage = pathinfo($_FILES['image']['name']);
          $extentionImage    = $informationsImage['extension'];
          $extentionsAccepte = array('png', 'gif', 'jpg', 'jpeg');

          if(in_array($extentionImage, $extentionsAccepte)){
            $img_taille = $_FILES['image']['size'];
            $img_nom    = basename($_FILES['image']['name']);
            $nomUpload  = 'assets/images/upload/'.time().rand().rand().'.'.$extentionImage;
            move_uploaded_file($_FILES['image']['tmp_name'], $nomUpload);
            unlink($image[0]->getLink());

            $newImage->setSize($img_taille);
            $newImage->setType($extentionImage);
            $newImage->setName($img_nom);
            $newImage->setLink($nomUpload);

          } else {
            header('location: ../?page='.$page.'&error=TYPE&id='.$id);
            exit();
          }
        } else{
          header('location: ../?page='.$page.'&error=TAILLE&id='.$id);
          exit();
        }
      }
      $imagesDAO->updateImage($newImage);
      header('location: ../?page='.$page.'&error=SUCCESSI&id='.$id);
    }

    if(isset($_GET['error'])){
      $message = htmlspecialchars($_GET['error']);
      $alert = choixAlert($message);
    }

    require_once(PATH_VIEWS.$page.'.php');
  } else {
    header('location: ../?page=edit');
  }
} else {
  header('location: ../?page=edit');
}
