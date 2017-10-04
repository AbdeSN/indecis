<?php
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public  function index()
    {
        $this->view->load("login"); // sans le constructeur parent , on ne peut pas faire ceci , car on a instancier la classe view dans le constructeur du controller
    }
}
