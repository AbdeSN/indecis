

<?php

        class ConnexionDao extends Model
        {
                public function __construct()
                {
                        parent::__construct();
                }

                public function connexion($mail, $password)
                {
                        $sql = "SELECT * FROM USER WHERE mail='".$mail."' ";
                        return $this->db->query($sql);
                }

        }


?>