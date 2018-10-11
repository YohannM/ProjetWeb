<?php

function choixAlert($message)
{
  $alert = array();
  switch($message)
  {
    case 'query' :
      $alert['messageAlert'] = ERREUR_QUERY;
      break;
    case 'url_non_valide' :
      $alert['messageAlert'] = TEXTE_PAGE_404;
      break;
    case 'cat_non_trouvee' :
      $alert['messageAlert'] = CAT_NON_TROUVEE;
      break;
    case 'id_non_trouvee' :
      $alert['messageAlert'] = ID_NON_TROUVEE;
      break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }

  return $alert;
}
