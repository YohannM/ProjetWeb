<?php
/*
 * MODULE DE PHP
 * Index du site
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

// Initialisation des paramètres du site
require_once('./config/configuration.php');
require_once('./lib/foncBase.php');
session_name("p1702174");
session_start ();

// si un attribut langue est passée en GET alors on change la variable de session langue
if (isset($_GET['langue']) && in_array($_GET['langue'], ['FR-fr', 'EN-en', 'CH-ch']))
{
    $_SESSION['langue'] = $_GET['langue'];
} else if (!isset($_SESSION['langue'])) {
  $_SESSION['langue'] = "FR-fr";
}

require_once(PATH_TEXTES.$_SESSION['langue'].'.php');
//vérification de la page demandée 
if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
  if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
  { 
    $page = '404'; //page demandée inexistante
  }
}
else
	$page='accueil'; //page d'accueil du site - http://.../index.php

//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php'); 

?>
