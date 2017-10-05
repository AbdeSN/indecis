<?php

class ListeBesoinsDao extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    public function getListeBesoins()
    {
      $sql = "select idB, statut, titreticket, date, nomentreprise from besoins";
      return $this->db->query($sql);
    }
  }

 ?>
