<?php
    class Model
    {
        public $db;

        public function __construct()
        {
            $this->db = $this->getConnexion();
        }

        private  function  getConnexion()
        {
            $connexion = connexion();
            //extract($connexion);
            $dns = "mysql:host=".$connexion['host'].
                    ";dbname=".$connexion['database'];
            $user = $connexion['user'];
            $password = $connexion['password'];
            $etat = $connexion['etat'];
            if($etat == "on")
                try
                {
                    $this->db = new PDO($dns,
                                        $user,
                                        $password,
                                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//gere les erreurs en pdo
                }
                catch(PDOException $ex)
                {
                    die($ex->getMessage());
                }
            return $this->db;
        }
    }
?>