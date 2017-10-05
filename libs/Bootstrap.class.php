<?php
    class Bootstrap
    {
        public function __construct()
        {
            $modele = new Model();
            if(isset($_GET['url']))
            {
                $url = explode("/",$_GET['url']);
                $controller = $url[0];
                $file = "controller/".$url[0].".class.php";

                if(file_exists($file))
                {
                    require_once "controller/".$url[0].".class.php";
                    $objetControlleur = new $url[0]();

                    if(isset($url[2]))
                    {
                        if($this->rechercheMethode($objetControlleur,$url[1]))
                            $objetControlleur->{$url[1]}($url[2]);
                        else
                            echo "La methode ".$url[1].
                                " n'existe pas dans le controlleur ".$controller;
                    }
                    elseif(isset($url[1]))
                    {
                        if($url[1] == "")
                            $objetControlleur->{"index"}();
                        else
                            if($this->rechercheMethode($objetControlleur,$url[1]))
                                $objetControlleur->{$url[1]}();
                            else
                                echo "La methode ".$url[1].
                                    " n'existe pas dans le controlleur ".$controller;
                    }
                    else
                    {
                        $objetControlleur->{"index"}();
                    }

                }
                else
                {
                    echo "Le controlleur ".$controller." n'existe pas";
                }
            }
            else
            {
                require_once 'controller/Index.class.php';
                $controller = new Index();
                $controller->index();
            }

        }

        public function rechercheMethode($objetClasse, $methode)
        {
            $lesMethodes = get_class_methods(get_class($objetClasse));
            $trouve = false;
            foreach($lesMethodes as $m)
            {
                if($m == $methode)
                    $trouve = true;
            }
            return $trouve;
        }
    }
?>