<?php
    //appel model
    require_once(PATH_MODELS.'CategorieDAO.php');
    require_once(PATH_MODELS.'PhotoDAO.php');

    //création d'un objet photoDAO et catégorieDAO
    $cat = new CategorieDAO(null);
    $pho = new PhotoDAO(null);

    //tableau contenant les catégories
    $tabCat = $cat->getAllCat();

    // on vérifie la présence d'une catégorie sélectionnée
    if(isset($_GET['categorie']) && $_GET['categorie'] != TOUTES_CATEGORIES)
    {
        $intCat = (Int)htmlspecialchars($_GET['categorie']);

        // si le cast en Int s'est mal passé
        if($intCat == false)
        {
            $alert = choixAlert("cat_non_trouvee");
        }

        // on récupère les photos correspondant à la catégorie
        $tabPhoto = $pho->getPhotoFromCat($intCat);

        // si le numéro de catégorie est erroné
        if($tabPhoto == false)
        {
            $alert = choixAlert("cat_non_trouvee");
        }
        
    } else {
        // si aucune catégorie sélectionnée : on récupère toutes les photos
        $tabPhoto = $pho->getAllPhoto();
    }

    // appel de la vue
    require(PATH_VIEWS.'accueil.php');