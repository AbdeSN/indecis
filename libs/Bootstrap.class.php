<?php
    class Bootstrap
    {
        public function __construct()
        {
            $modele = new Model();
            if(isset($_GET['url']))
            {
                $url = explode("/",$_GET['url']); // on explose l'url
                $controller = $url[0]; // on met le controler dans une variable controller
                $file = "controller/".$url[0].".class.php"; // on met dans une variable file le chemin du controller pour verifier sil existe

                if(file_exists($file)) // la verification commence ici
                {
                    require_once "controller/".$url[0].".class.php"; // on charge la class controller (exemple etudiant.class.php)
                    $objetControlleur = new $url[0](); // on crée un objet de la classe controller qui est ici $url[0]

                    if(isset($url[2])) // si il ya un argument , forcement il ya une methode
                    {
                        if($this->rechercheMethode($objetControlleur,$url[1])) // on verifie si il ya une methode , on rentre les arguments que l'on a exiger en bas ( la classe recherchemethode en bas) . si ca renvoie true
                            $objetControlleur->{$url[1]}($url[2]); // si la méthode  existe , on appel la methode et l'argument contenue dans le controller
                        else
                            echo "La methode ".$url[1].
                                " n'existe pas dans le controlleur ".$controller;
                    }
                    elseif(isset($url[1])) // si il ya une méthode
                    {
                        if($url[1] == "") //si la méthode quon a pass en paramétre est vide
                            $objetControlleur->{"index"}(); // on appel l'index contenu dans le controller ( exemple le controller etudiant)
                        else // sinon si la méthode existe
                            if($this->rechercheMethode($objetControlleur,$url[1])) //  on recherche la methode , si on la trouve (renvoi trouve) ,
                                $objetControlleur->{$url[1]}(); // on appel la methode dans le controler
                            else
                                echo "La methode ".$url[1].
                                    " n'existe pas dans le controlleur ".$controller;
                    }
                    else
                    {
                        $objetControlleur->{"index"}();
                    }

                }
                else // si le fichier(controller) nexiste pas
                {
                    echo "Le controlleur ".$controller." n'existe pas";
                }
            }
            else
            {
                require_once 'controller/Index.class.php';  // si il nya rien dans l'url
                $controller = new Index();
                $controller->index(); // pour appel la methode index qui est dans la classe Index
            }

        }

        public function rechercheMethode($objetClasse, $methode) // argument : lobjet du controller et nom de la methode
        {
            $lesMethodes = get_class_methods(get_class($objetClasse)); // get class : pour connaitre le controller , getclassmethode : pour recuperer les methodes du controller
            $trouve = false; // si on trouve pas de methode
            foreach($lesMethodes as $m) // foreach est une boucle, il parcourir tte les méthodes de la classe controller , si on trouve la methode que lon cherche dans le controller , alors trouve = true
            {
                if($m == $methode)
                    $trouve = true;
            }
            return $trouve;
        }
    }
?>