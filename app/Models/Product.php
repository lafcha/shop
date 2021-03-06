<?php 

namespace Oshop\Models;

use Oshop\Utils\Database;
use PDO;

class Product extends CoreModel {
  private $name;
  private $description;
  private $picture;
  private $price;
  private $rate;
  private $status;
  private $brand_id;
  private $category_id;
  private $type_id;


  public function findAll(){
    // va chercher tous les produits tans la table products....

  }

  public function findAllByCategory($categoryId)
  {
    $sql = '
      SELECT * 
      FROM `product`
     WHERE category_id=' . $categoryId;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    return $results;
  }

  public function findAllByType($typeId)
  {
    $sql = '
      SELECT * 
      FROM `product`
     WHERE type_id=' . $typeId;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    return $results;
  }


  public function findAllByBrand($brandId)
  {
    $sql = '
      SELECT * 
      FROM `product`
     WHERE type_id=' . $brandId;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    return $results;
  }

  public function FindProductBrand ($name){
    $sql = '
    SELECT brand.name AS brand_name,brand.id, product.name AS product_name
    FROM brand
    INNER JOIN product ON  brand.id= product.brand_id
    WHERE  product.name=' . $name;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchObject(PDO::FETCH_OBJ, self::class);
    return $results;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of picture
   */ 
  public function getPicture()
  {
    return $this->picture;
  }

  /**
   * Set the value of picture
   *
   * @return  self
   */ 
  public function setPicture($picture)
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Get the value of price
   */ 
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */ 
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of rate
   */ 
  public function getRate()
  {
    return $this->rate;
  }

  /**
   * Set the value of rate
   *
   * @return  self
   */ 
  public function setRate($rate)
  {
    $this->rate = $rate;

    return $this;
  }

  /**
   * Get the value of status
   */ 
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */ 
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  
  /**
   * Get the value of brand_id
   */ 
  public function getBrandId()
  {
    return $this->brand_id;
  }

  /**
   * Set the value of brand_id
   *
   * @return  self
   */ 
  public function setBrandId($brand_id)
  {
    $this->brand_id = $brand_id;

    return $this;
  }

  /**
   * Get the value of category_id
   */ 
  public function getCategoryId()
  {
    return $this->category_id;
  }

  /**
   * Set the value of category_id
   *
   * @return  self
   */ 
  public function setCategoryId($category_id)
  {
    $this->category_id = $category_id;

    return $this;
  }

  /**
   * Get the value of type_id
   */ 
  public function getTypeId()
  {
    return $this->type_id;
  }

  /**
   * Set the value of type_id
   *
   * @return  self
   */ 
  public function setTypeId($type_id)
  {
    $this->type_id = $type_id;

    return $this;
  }

}