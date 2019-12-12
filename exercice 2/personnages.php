<?php

    class personnage {

        private $_pseudo;
        private $_vie;

        public function __construct()
        {
            $this->_vie = 100;
        }

        public function setPseudo($nouveauPseudo)
        {
            $this->_pseudo = $nouveauPseudo;
        }

           

    }
?>