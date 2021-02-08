<?php

class Animal {
  // Avec protected, on indique aux classes
  // qui vont heriter de la classe Animal qu'elles peuvent acceder
  // a cette propriété
  protected $estVivant = true;

  protected function manger(){
    echo 'Miam Miam Miam <br>';
  }

  protected function dormir(){
    echo 'RrrrrrrP pppppppffff <br>';
  }
  protected function mourir(){
    $this->estVivant = false;
    echo 'Je crois que c\'est la fin <br>';
  }
} // fin class Animal


// Ici grace au mot clé extends, la classe Chien va heriter 
// des propriété/methodes protected de classe Animal
class Chien extends Animal {
  protected $nombreDePattes = 4;

  protected function aboyer(){
    echo 'ouafOuafOufffff<br>';
  }

  protected function courirApresFacteur(){
    echo 'Grrrrrrrrr Grrr ouaf ouaf Grrrrr<br>';
  }

}


class BorderCollie extends Chien {
    private function troupeauter(){
        echo "Pas bouger les moutons Grrrrr <br>";
    }

    public function visMaVie(){
        $this->aboyer();
        $this->troupeauter();
        $this->courirApresFacteur();
        $this->dormir();
    }
}

class EpagneulBreton extends Chien {
    private function chasser(){
        echo "ça sent le gibier .wouf wouf Grrrrr <br>";
    }

    public function visMaVie(){
        $this->aboyer();
        $this->chasser();
        $this->courirApresFacteur();
        $this->dormir();
    }
}







