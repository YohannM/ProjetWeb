<?php

class Photo
{

  // attributs d'instance
  private $_photoId = null;
  private $_nomFich = null;
  private $_description = null;
  private $_catId = null;

  //appelée par new
  public function __construct ($_photoId, $_nomFich, $_description, $_catId)
  {
    $this->_photoId = $_photoId;
    $this->_nomFich = $_nomFich;
    $this->_description = $_description;
    $this->_catId = $_catId;
  } 
  

  // Getters
  public function getPhotoId()
  {
    return $this->_photoId;
  }

  public function getNomFich()
  {
    return $this->_nomFich;
  }

  public function getDescription()
  {
    return $this->_description;
  }

  public function getCatId()
  {
    return $this->_catId;
  }


  //Setters
  public function setPhotoId($_PhotoId)
  {
    $this->_photoId = $_PhotoId;
  }

  public function setNomFich($_nomFich)
  {
    $this->_nomFich = $_nomFich;
  }

  public function setDescription($_description)
  {
    $this->_description= $_description;
  }

  public function setCatId($_catId)
  {
    $this->_catId = $_catId;
  }

  
  
}