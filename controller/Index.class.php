
<?php

    class Index extends Controller
    {
        public function __construct()
        {
        parent::__construct();
        }


    public function index()
    {
        require_once __ROOT__.'/login.php';
    }

}

?>