<?php

require_once(PATH_MODELS."DAO.php");
require_once(PATH_ENTITY . "Categorie.php");

class CategorieDAO extends DAO
{

    // focntion privée construisant un tableau de Catégories à partir du ResultSet
    private function _tableauCat($res)
    {
      if(!$res){
          return false;
      } 
      foreach($res as $cat)
      {
          $tabCat[]=new Categorie($cat['catId'],$cat['nomCat']);
      }
      return $tabCat;
    }

  // récupère toutes les Catégories
  public function getAllCat()
  {
    $sql="select * from Categorie";
    $res=$this->queryAll($sql);
    return self::_tableauCat($res);
  }

  //récupère un id de catégorie depuis son nom
  public function getCatIdFromName($_nomCat)
  {
    $sql="select catId from Categorie where nomCat = :nomCat";
    $res=$this->queryRow($sql,array('nomCat'=>$_nomCat));
    return $res[0];
  }
  
   //récupère un nom de catégorie depuis son id
  public function getNameFromCatId($_catId)
  {
    $sql="select nomCat from Categorie where catId = :catId";
    $res=$this->queryRow($sql,array('catId'=>$_catId));
    return $res[0];
  }

}