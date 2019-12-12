<?php

    class personnage {

        private $_pseudo;
        private $_vie;
        private $_estVivant = true;

        public function __construct()
        {
            $this->_vie = 100;
            
        }

        public function setPseudo($nouveauPseudo)
        {
            $this->_pseudo = $nouveauPseudo;
        }


        public function getPseudo()
        {
           return  $this->_pseudo ;
        }

        public function getVie()
        {
           return  $this->_vie ;
        }


        public function afficher()
        {
            echo "<p>je suis ".$this->_pseudo." et j'ai ". $this->_vie ." pv</p>";
        }

        public function prendDesDegat($degat)
        {

            $this->_vie = $this->_vie - $degat;
           
        }
        

        public function attaquer($personnage)
        {            
                    $critchance = rand(0,1);

                    if ($critchance == 0){
                        $personnage->prendDesDegat(20);
                        echo "<p>".$this->_pseudo." attaque ".$personnage->getPseudo()." il perd 20 pv, il lui reste ". $personnage->getVie() ." pv</p>";
                    } else {
                        $personnage->prendDesDegat(50);
                        echo "<p>RANDOM CRIT : ".$this->_pseudo." attaque ".$personnage->getPseudo()." il perd 50 pv, il lui reste ".$personnage->getVie()  ." pv</p>";
                           }
                   
             if ($this->_vie <= 0)
             {
                $this->_estVivant = false;
                echo "<p>".$this->_pseudo." attaque ".$personnage->getPseudo()." ,il lui reste 0 pv</p>";;
                
                $chance = rand(0,3);

                if ($chance == 0)
                {
                    echo "<p>".$this->_pseudo." a achevé ".$personnage->getPseudo()."</p>";
                } elseif ($chance == 1)
                    {
                        echo "<p>".$this->_pseudo." a pulvérisé ".$personnage->getPseudo()."</p>";
                    } elseif ($chance == 2)
                        {
                            echo "<p>".$this->_pseudo." a anihilé ".$personnage->getPseudo()."</p>";
                        } elseif ($chance == 3)
                            {
                                echo "<p>".$this->_pseudo." a démembré ".$personnage->getPseudo()."</p>";
                            }
             }      
        }

        public function estVivant()
        {
            return  $this->_estVivant;
        }
           

    }
?>