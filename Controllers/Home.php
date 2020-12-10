<?php
    require_once("Models/TCategoria.php");
    class Home extends Controllers{
        use TCategoria;
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_tag'] = NOMBRE_EMPRESA;
            $data['page_title'] = NOMBRE_EMPRESA;
            $data['page_name'] = "jlm";
            $data['slider'] = $this->getCategoriasT(CAT_SLIDER);
            $data['banner'] = $this->getCategoriasT(CAT_BANNER);
            $this->views->getView($this,"home",$data);
        }


    }
?>
