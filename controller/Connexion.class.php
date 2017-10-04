
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
            if(isset($_POST['email'])&& isset($_POST['password']))
            {
                $email = addslashes(htmlspecialchars(htmlentities(trim($_POST['email']))));
                $password = sha1($_POST['password']);
                if(strlen($email > 7))
                {
                    if(preg_match("^[a-z0-9._-]+@+g+f+i+.+f+r",$email))
                    {

                    }
                    else
                    {

                    }
                }
                else
                {

                }
            }
            else
            {

            }
        }
        else
        {
            $message = 'Veuillez remplir tous les champs.';
        }
       
    }
}

?>