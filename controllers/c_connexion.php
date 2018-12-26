<?php
require_once(PATH_MODELS.'UserDAO.php');
require_once(PATH_ENTITY.'User.php');
$userDAO = new UserDAO();

// Verifie si cookie existe
if(!empty($_COOKIE['log']) && !isset($_SESSION['connect'])){
  $log = htmlspecialchars($_COOKIE['log']);

  $user = $userDAO->getUserByKeySecret($log);
  if($user != null){
    $_SESSION['connect'] = 1;
    header('location: ../');
    exit();
  }
}

if(!empty($_POST['email']) && !empty($_POST['password'])){
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $error    = 1;

  // Crypter
  $password = "aq1".sha1($password."1254")."25";

  $user = $userDAO->getUserByEmail($email);

  if($user != null && $password == $user->getPassword()){
      $_SESSION['connect'] = 1;
      $error = 0;
      // Creer cookie
      if(isset($_POST['check_connect'])){
        setcookie('log', $user->getKeySecret(), time() + 365*24*3600, null, null, false, true);
      }
      header('location: ../');
      exit();
  }
  if($error == 1){
    header('location: ../?page='.$page.'&error=INCONNUE&email='.$email.'');
  }
}


if(isset($_GET['error'])){
  $message = htmlspecialchars($_GET['error']);
  $alert = choixAlert($message);
}

require_once(PATH_VIEWS.$page.'.php');
