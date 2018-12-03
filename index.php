<?php
// Initialisation des paramètres du site
require_once('./config/configuration.php');
require_once(PATH_TEXTES.LANG.'.php');

if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET['page']);
  if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
  {
    $page = 'accueil';
  }
}
else
	$page='accueil';

require_once(PATH_CONTROLLERS.$page.'.php');
?>
