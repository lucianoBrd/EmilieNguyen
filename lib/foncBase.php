<?php

function choixAlert($message)
{
  $alert = array();
  switch($message)
  {
    case 'SUCCESSI' :
      $alert['messageAlert'] = MESSAGE_SUCCESSI;
      $alert['typeAlert'] = 'success';
      break;
    case 'SUCCESS' :
      $alert['messageAlert'] = MESSAGE_SUCCESS;
      $alert['typeAlert'] = 'success';
      break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
      $alert['typeAlert'] = 'danger';
  }
  return $alert;
}
