<?php

        class ConnexionDao extends Model
        {
            public function __construct()
            {
                parent::__construct();
            }

            public function login($mail, $password)
            {
                $password = sha1($_POST['password']);

                $req = $bdd->prepare('select * from users where mail = :mail and password = :password');
                $req->execute(array(
                   'mail' => $mail,
                   'password' => $password
                ));
               /* $sql = "select * from users where mail='".$ref."' and password='".$password."' ";
                return $this->db->exec($sql);*/

               $resultat = $req->fetch();

               if(!$resultat)
               {
                   $erreurAutehtification  = "Erreur d'authentification";
               }
               else
               {
                   session_start();
                   $_SESSION['idU'] = $resultat['idU'];
                   $_SESSION['mail'] =  $resultat['mail'];

                   $connected = "Connecté";
               }
            }
        }
?>