
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
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'indecis';
        $password = '';
        $message = '';

        $bdd = new mysqli($servername, $username, $password, $dbname);


        if(isset($_POST['log']))
        {
            if(!(($_POST['mail']) && isset($_POST['password'])) =='')
            {
                $mail = addslashes(htmlspecialchars(htmlentities(trim($_POST['mail']))));


                $password = $_POST['password'];

                if(preg_match("^[a-z0-9._-]+@+g+f+i+.+f+r^",$mail))
                {
                    $req_mail = mysqli_query($bdd,"SELECT mail, password, role FROM users WHERE mail ='$mail'");
                    $row = mysqli_fetch_row($req_mail);

                    if($mail == $row[0])
                    {
                        if($password == $row[1])
                        {
                            if($row[2] == 'commercial' || $row[2] == 'admin' )
                            {
                                session_start();
                                $_SESSION['mail'] = $row['mail'];
                                header("Location: ListeBesoins");
                            }
                            else
                            {
                                $message = "Access denied";
                            }
                        }
                        else
                        {
                            $message = "mot de passe faux !";
                        }
                    }
                    else
                    {
                        $message = "mail faux!!!!";
                    }
                }
                else
                {
                    $message =  "mail externe";
                }
            }
            else
            {
                $message =  "Veuillez remplir tous les champs !";
            }
        }
        else
        {

        }
    }
}

?>