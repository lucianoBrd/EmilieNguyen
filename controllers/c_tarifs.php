<?php
require_once(PATH_MODELS.'AvisDAO.php');
require_once(PATH_ENTITY.'Avis.php');
$avisDAO = new AvisDAO();

$nbAvis = $avisDAO->getNbAvis();

$avisListe = $avisDAO->get4Avis();
require_once(PATH_VIEWS.$page.'.php');
