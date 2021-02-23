<?php
class Pedidos extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . '/login');
        }
        getPermisos(MPEDIDOS);
    }

    public function Pedidos()
    {
        if (empty($_SESSION['permisosMod']['r'])) {
            header("Location:" . base_url() . '/dashboard');
        }
        $data['page_tag'] = "Pedidos | JLM";
        $data['page_title'] = "Pedidos";
        $data['page_name'] = "pedidos";
        $data['page_functions_js'] = "functions_pedidos.js";
        $this->views->getView($this, "pedidos", $data);
    }

    public function getPedidos(){
        if ($_SESSION['permisosMod']['r']) {
            $idpersona = "";
            if( $_SESSION['userData']['idrol'] == RCLIENTES){
                $idpersona = $_SESSION['userData']['idpersona'];
            }
            $arrData = $this->model->selectPedidos($idpersona);
            //dep($arrData);
            for ($i = 0; $i < count($arrData); $i++) {
                $btnView = '';
                $btnEdit = '';
                $btnDelete = '';

                $arrData[$i]['transaccion'] = $arrData[$i]['referenciacobro'];
                if($arrData[$i]['idtransaccionpaypal'] != ""){
                    $arrData[$i]['transaccion'] = $arrData[$i]['idtransaccionpaypal'];
                }

                $arrData[$i]['monto'] = SMONEY.formatMoney($arrData[$i]['monto']);

                if ($_SESSION['permisosMod']['r']) {
                    $btnView .= ' <a title="Ver detalle" href="'.base_url().'/pedidos/orden/'.$arrData[$i]['idpedido'].'" target="_blank" class="btn btn-info btn-sm"> <i class="far fa-eye"></i> </a>
                    ';
                    if($arrData[$i]['idtipopago'] == 1){
                        $btnView .= '<button class="btn btn-warning btn-sm" onClick="fntViewInfo('.$arrData[$i]['idpedido'].')" title="Ver Transacción"><i class="fab fa-paypal fa-x3" aria-hidden="true"></i></button> ';
                    }else{
                        $btnView .='<button class="btn btn-secondary  btn-sm" disabled=""><i class="fa fa-paypal" aria-hidden="true"></i></button>';
                    }
                }
                if ($_SESSION['permisosMod']['u']) {
                    $btnEdit = '<button class="btn btn-primary  btn-sm" onClick="fntEditInfo(this,' . $arrData[$i]['idpedido'] . ')" title="Editar pedido"><i class="fas fa-random"></i></button>';
                }
                $arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' </div>';
            }
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function orden(int $idpedido){
        if (empty($_SESSION['permisosMod']['r'])) {
            header("Location:" . base_url() . '/dashboard');
        }
        $idpersona = "";
        if( $_SESSION['userData']['idrol'] == RCLIENTES ){
            $idpersona = $_SESSION['userData']['idpersona'];
        }
        
        $data['page_tag'] = "Pedido | JLM";
        $data['page_title'] = "Pedido";
        $data['page_name'] = "pedido";
        $data['arrPedido'] = $this->model->selectPedido($idpedido,$idpersona);
        $this->views->getView($this, "orden", $data);
    }
}
