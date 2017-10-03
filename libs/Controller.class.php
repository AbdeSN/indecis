<?php
    class Controller // est appelé sur toute les classe des controler  permet de chargé les pages
    {
        protected $view; // protected : seul la classe qui hérite de la classe controler et la classe controller lui mm , peuvent utiliser cet atttibut
        public function __construct()
        {
            $this->view = new View();
        }
    }
?>