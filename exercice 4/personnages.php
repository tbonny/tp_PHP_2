<?php

    class personnage {

        private $_pseudo;
        private $_vie;
        private $_estVivant;

        public function __construct()
        {
            $this->_vie = 100;
            $this->_estVivant = true;
        }

        public function setPseudo($nouveauPseudo)
        {
            $this->_pseudo = $nouveauPseudo;
        }


        public function getPseudo()
        {
           return  $this->_pseudo ;
        }


        public function afficher()
        {
            echo "<p>je suis ".$this->_pseudo." et j'ai ". $this->_vie ." pv</p>";
        }

        public function attaquer($personnage)
        {
 
            $this->_vie = $this->_vie-20;

            if ($this->_vie<=0)
                {
                    $this->_estVivant=false;
                }
            

            echo "<p>".$this->_pseudo."est attaqué par ".$personnage->getPseudo()." et perd 20 pv, il lui reste ". $this->_vie ." pv</p>";
        }

        public function estVivant()
        {
            return  $this->_estVivant;
        }
           

    }
?>