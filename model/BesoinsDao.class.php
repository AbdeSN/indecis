

<?php

        class BesoinsDao extends Model
        {
            public function __construct()
            {
               parent::__construct();
            }
       
        public function addBesoins($title,$date,$idC,$fullDescription,$mksf,$date_startLatest,$duration,$location,$rate,$descriptionFile,$status,$consultants_name)
        {
            $sql = "insert into besoins values (null,'$title','$date','$idC','$fullDescription','$mksf','$date_startLatest','$duration','$location','$rate','$descriptionFile','$status','$consultants_name')" ;
            return $this->db->exec($sql);

        }

        public function listeBesoins()
        {
          $sql = "select * from besoins";
          return $this->db->query($sql);
        }    


        public function getBesoinsByIdC($idC)
        {
           $sql = "select * from besoins where idC='".$idC."' ";
           return $this->db->query($sql);
        }
    }

?>