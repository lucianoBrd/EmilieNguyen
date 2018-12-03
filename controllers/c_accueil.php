<?php
require_once(PATH_MODELS.'ImagesDAO.php');

$imagesDAO = new ImagesDAO();

$imagesListe = $imagesDAO->get10Images();

require_once(PATH_VIEWS.'accueil.php');
