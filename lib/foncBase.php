<?php

function choixAlert($message)
{
  $alert = array();
  switch($message)
  {
    case 'URL_INVALIDE' :
      $alert['messageAlert'] = MESSAGE_URL_I;
      break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}
