<?php
    class View
    {
        public function __construct()
        {

        }

        public function load()
        {
            $num = func_num_args();
            $args = func_get_args();
            switch($num)
            {
                case '1':
                    $this->charger($args[0]);
                    break;
                case '2':
                    $this->chargerDonnees($args[0],$args[1]);
                    $args[0] = $args[0];
                    break;
            }
        }
        private  function  charger($page)
        {
            require_once 'view/'.$page.'.php';
        }
        function  chargerDonnees($page,$data)
        {
            require_once 'view/'.$page.'.php';
        }

    }
?>