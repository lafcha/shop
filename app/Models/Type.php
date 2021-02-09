<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use PDO;

class Type extends CoreModel {

    /*********** Propriétés ************/

    private $name;
    private $footer_order;
 

     /*********** Méthodes ************/

     /**
      * Récupérer toutes les entrées de la table Brand
      *
      * @return $results
      */
  public function findAll()
  {
    // j'ecris la requete 
    $sql = '
      SELECT * FROM `type`
    ';

    $pdo = Database::getPDO();

    $pdoStatement = $pdo->query($sql);

    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

    return $results;
  }

    /**
     * Récupérer une marque selon un Id défini
    *
    * @return $results
    */

  public function find($id)
  {
    $sql = '
      SELECT * 
      FROM `type`
      WHERE `id` = ' . $id ;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    // petite nouveauté, je peux faire un fetchObject plutot qu'un fetch
    // Pour récuperer mes donn'es sou la forme d'UN objet qui sera instancie a partir de la classe 'Category'
    $result = $pdoStatement->fetchObject(self::class);
    return $result;
  }
  

  public function findFooterFive(){
    $pdo = Database::getPDO();
    $sql = '
      SELECT * 
      FROM `type`
      WHERE `footer_order` > 0
      ORDER BY `footer_order`
      LIMIT 5
    ';
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    return $results;
  }

/*********** Getters & Setters ************/

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
     * Get the value of footer_order
     */ 
    public function getFooterOrder()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footer_order
     *
     * @return  self
     */ 
    public function setFooterOrder($footer_order)
    {
        $this->footer_order = $footer_order;

        return $this;
    }

}