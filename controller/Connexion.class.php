
<?php

    require_once "model/ConnexionDao.class.php";

    class Connexion extends Controller
    {
        public function __construct()
        {
        parent::__construct();
        }
    

    public function connexion()
    {
        if(isset($_POST['submit']))
        {
            extract($_POST);
            $pdao = new ConnexionDao();
            $ok = $pdao->login($mail,$password);
            echo $ok;
        }
       
    }
}

?>