<?php
class Productos extends Controllers
{
	public function __construct()
	{
		parent::__construct();
		session_start();
		if (empty($_SESSION['login'])) {
			header('Location: ' . base_url() . '/login');
		}
		getPermisos(4);
	}

	public function Productos()
	{
		if (empty($_SESSION['permisosMod']['r'])) {
			header("Location:" . base_url() . '/dashboard');
		}
		$data['page_tag'] = "Productos | JLM";
		$data['page_title'] = "Productos";
		$data['page_name'] = "productos";
		$data['page_functions_js'] = "functions_productos.js";
		$this->views->getView($this, "productos", $data);
    }
}