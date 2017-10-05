
<?php

    class ListeBesoins extends Controller
    {
        public function __construct()
        {
        parent::__construct();
        }


    public function index()
    {

        $this->view->load("liste_besoins");
    }
}

?>