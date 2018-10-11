<?php

class Categorie
{
  // attributs d'instance
  private $_catId = null;
  private $_nomCat = null;

  //appelée par new
  public function __construct ($_catId, $_nomCat)
  {
    $this->_catId = $_catId;
    $this->_nomCat = $_nomCat;
  }

  // Getters
  public function getCatId()
  {
    return $this->_catId;
  }

  public function getNomCat()
  {
    return $this->_nomCat;
  }


  // Setters
  public function setNomCat($_nomCat)
  {
    $this->_nomCat = $_nomCat;
  }

  public function setCatId($_catId)
  {
    $this->_catId = $_catId;
  }

  
}

