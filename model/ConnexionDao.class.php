<?php

        class ConnexionDao extends Model
        {
            public function __construct()
            {
                parent::__construct();
            }

            public function login($mail, $password)
            {
                $sql = "select * from users where mail='".$ref."' and password='".$password."' ";
                return $this->db->exec($sql);
            }
        }
?>