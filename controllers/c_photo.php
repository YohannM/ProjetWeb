<?php

    //appel model
    require_once(PATH_MODELS.'PhotoDAO.php');
    require_once(PATH_MODELS.'CategorieDAO.php');
    
    //création d'un objet photoDAO et catégorieDAO
    $pho = new PhotoDAO(null);
    $cat = new CategorieDAO(null);

    // on vérifie la présence d'un id dans l'url
    if(isset($_GET['id']))
    {
        // on récupère la photo correspondante à l'id
        $photo = $pho->getPhotoFromId($_GET['id']);

        // si l'id ne correspond à aucune photo
        if($photo == false)
        {
            // on lance une alerte
            $alert = choixAlert("id_non_trouvee");
        }
        else
        {
            // on récupère la catégorie de la photo grâce à l'id
            $catName = $cat->getNameFromCatId($photo->getCatId());
        }
         
    } 
    // appel de la vue
    require(PATH_VIEWS.'photo.php');