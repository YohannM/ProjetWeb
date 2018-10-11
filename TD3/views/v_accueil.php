<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>

<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->

<?php
    // on affiche un titre différent si il y a une catégorie sélectionnée ou non
    if(isset($_GET['categorie']) && $_GET['categorie'] != "Toutes les catégories")
    {
        echo '<h1>' .  TITRE_PAGE_CATEGORIE . $cat->getNameFromCatId($_GET['categorie']). '</h1>';
    }
    else {
        echo '<h1>' . TITRE_PAGE_ACCUEIL_TOUS . '</h1>';
    }
?>


<?php
    // on affiche le nombre de photos sélectionnées
    if(!isset($alert['messageAlert'])) {
        echo "<div class='alert alert-success' role='alert'>" . count($tabPhoto) . " " . PHOTO_SELECTIONNEES . "</div>"; 
?>


<div>
    <!-- formulaire de choix de catégorie-->
    <FORM action='' method='get'>
    <?= PHOTO_AFFICHAGE ?>
    <SELECT name='categorie' size='1'>
    <OPTION><?=TOUTES_CATEGORIES?></OPTION>
<?php
    // pour chaque catégorie présente dans le tableau
    foreach($tabCat as $cate)
    {
        ?>
        <!-- on crée une option par catégorie-->
        <OPTION VALUE ="<?=$cate->getCatId()?>" <?=(isset($intCat) && $intCat == $cate->getCatId()) ? 'selected' : '' ?>> <?=$cate->getNomCat()?> </OPTION>
        <?php
    }
?>
</SELECT>
    <INPUT TYPE='submit' VALUE="<?= VALIDER ?>" />
    </FORM>
</div>
</br>


<?php
    // pour chaque photo présente dans le tableau
    foreach($tabPhoto as $img)
    {
        ?>
        <!-- on l'affiche et on met un lien amenant vers le détail de la photo-->
       <a href='index.php?page=photo&id=<?=$img->getPhotoId()?> ' title=" <?= $img->getDescription() ?>">
       <img src='<?= PATH_IMAGES.$img->getNomFich() ?>' alt="<?= $img->getDescription()?>"/>
       </a>
    
    <?php
    }
}
?>
<!--  Fin de la page -->

<!--  Pied de page -->

<?php require_once(PATH_VIEWS.'footer.php'); 
