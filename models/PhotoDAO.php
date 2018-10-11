<?php

require_once(PATH_MODELS."DAO.php");
require_once(PATH_ENTITY . "Photo.php");
class PhotoDAO extends DAO
{

  // récupère toutes les photos d'une catégorie à partir de son id
  public function getPhotoFromCat($_catId)
  {
    $sql="select * from Photo where catId=:catId";
    $res=$this->queryAll($sql,array('catId'=>$_catId));
    return self::tableauPhoto($res);
  }

   // récupère toutes les Photos
  public function getAllPhoto()
  {
      $sql="select * from Photo";
      $res=$this->queryAll($sql);
      return self::tableauPhoto($res);
  }

  // récupère une photo à partir de son id
  public function getPhotoFromId($_photoId)
  {
    $sql="select * from Photo where photoId=:photoId";
    $res=$this->queryRow($sql,array('photoId'=>$_photoId));
    return $res ? new Photo($res['photoId'],$res['nomFich'],$res['description'],$res['catId']) : false;
  }


  // focntion privée construisant un tableau de Photos à partir du ResultSet
  private function tableauPhoto($res)
  {
    if(!$res){
        return false;
    } 
    foreach($res as $photo)
    {
        $tabPhoto[]=new Photo($photo['photoId'],$photo['nomFich'],$photo['description'],$photo['catId']);
    }
    return $tabPhoto;
  }

}
