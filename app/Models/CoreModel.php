<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use PDO;

// Model de base : c'est une classe-mère dont vont hériter tous les models
// Cette classe n'est pas destinée à être instanciée, mais simplement à être héritée (on dit également étendue)

class CoreModel {

    /*********** Propriétés ************/

    // Ces propriétés seront transmises aux enfants mais ne seront pas accèssibles de partout
    protected $id;
    protected $created_at;
    protected $updated_at;


    /*********** Getters & Setters ************/
       /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

        /**
     * Get the value of created_at
     */ 
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
