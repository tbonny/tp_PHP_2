<?php
    class user {

        private $_nom;
        private $_prenom;


        public function afficherUser($newNom, $newPrenom){

            $this->_nom = $newNom;
            $this->_prenom = $newPrenom;

            echo "je suis un User, je m'appelle ".$newNom." ".$newPrenom;
        }

        public function afficherNom($newNom){

            $this->_nom = $newNom;

            echo $newNom;
        }

        public function afficherPrenom($newPrenom){

            $this->_prenom = $newPrenom;

            echo $newPrenom;
        }







    }





?>