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
<h1><?= TITRE_PAGE_PHOTO ?></h1>
<!--mettre constante-->

<?php 
// si il n'y a pas d'alerte lancée 
if(!isset($alert['messageAlert'])) {
    ?>
    
<!-- on crée un tableau pour le détail de la photo -->
<div class = 'col-md-6 col-sm-6 col-xs-12'><img src=' <?= PATH_IMAGES. $photo->getNomFich() ?>' alt='<?= $photo->getDescription()?>'></div>
<div class = 'col-md-6 col-sm-6 col-xs-12'>
<table class='table table-bordered'>
   <tr>
    <th><?=DESCRIPTION?></th>    
    <td><?=$photo->getDescription()?></td>
   </tr>

   <tr>
    <th><?=FICHIER?></th>    
    <td><?=$photo->getNomFich()?></td>
   </tr>

   <tr>
    <th><?=CATEGORIE?></th>    
    <td><a href='?categorie=<?=$cat->getCatIdFromName($catName) ?>'><?=$catName?></a></td>
   </tr>

</table>

</div>
<?php
}
?>
<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
