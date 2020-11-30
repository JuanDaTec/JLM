<?php 
	class Categorias extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(6);
		}

		public function Categorias()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Categorias | JLM";
            $data['page_title'] = "Categorias";
			$data['page_name'] = "categorias";
			$data['page_functions_js'] = "functions_categorias.js";
			$this->views->getView($this,"categorias",$data);
		}

		public function setCategoria()
    	{

			dep($_POST);
			dep($_FILES);
			exit();

        $intIdrol = intval($_POST['idRol']);
        $strRol =  strClean($_POST['txtNombre']);
        $strDescripcion = strClean($_POST['txtDescripcion']);
        $intStatus = intval($_POST['listStatus']);

        if ($intIdrol == 0) {
            //Crear
            $request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);
            $option = 1;
        } else {
            //Actualizar
            $request_rol = $this->model->updateRol($intIdrol, $strRol, $strDescripcion, $intStatus);
            $option = 2;
        }

        if ($request_rol > 0) {
            if ($option == 1) {
                $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente en el sistema.');
            } else {
                $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente en el sistema.');
            }
        } else if ($request_rol == 'exist') {

            $arrResponse = array('status' => false, 'msg' => '¡Atención! El rol ya existe.');
        } else {
            $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		die();
		
    	}


	}
