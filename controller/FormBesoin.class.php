
<?php

    class FormBesoin extends Controller
    {
        public function __construct()
        {
        parent::__construct();
        }


    public function index()
    {

        $this->view->load("form_besoin");
    }

}

?>