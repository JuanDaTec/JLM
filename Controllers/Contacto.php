<?php
    class Contacto extends Controllers{
        public function __construct()
        {
            parent::__construct();
            session_start();
        }

        public function contacto()
        {
            $data['page_tag'] = "Contacto | JLM WorkShop";
            $data['page_title'] = "Contacto";
            $data['page_name'] = "contacto";
            $this->views->getView($this,"contacto",$data);
        }


    }
?>