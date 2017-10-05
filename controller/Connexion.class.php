
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
        var_dump("sa mama");
        if(isset($_POST['login']))
        {

            if(isset($_POST['mail'])&& isset($_POST['password']))
            {
                $mail = addslashes(htmlspecialchars(htmlentities(trim($_POST['mail']))));
                $password = sha1($_POST['password']);
                if(strlen($mail > 7))
                {
                    if(preg_match("^[a-z0-9._-]+@+g+f+i+.+f+r",$mail))
                    {
                        $pass = $this->db->prepare("select password from users where mail = :mail");
                        if(strncmp($password,$pass,strlen($pass)) === 0)
                        {
                            session_start();
                            $_SESSION['idU'] = "select idU from users where mail = :mail";
                            $_SESSION['mail'] = $mail;

                            echo 'Vous êtes connecté !';
                        }
                        else
                        {
                            echo "mot de passe faux !";
                            print_r("mot de passe faux !");
                        }
                    }
                    else
                    {
                        echo "mail faux";
                        print_r("mail faux");
                    }
                }
                else
                {
                    echo "mail faux longueur";
                    print_r("mail faux longueur");
                }
            }
            else
            {
                echo "Veuillez remplir tous les champs !";
                print_r("Veuillez remplir tous les champs !");
            }
        }
        else
        {
            print_r("ekghdsjhfjHFGSJdsh");
        }

    }
}

?>