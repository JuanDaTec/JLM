<?php
$orden = $data['pedido']['orden'];
$detalle = $data['pedido']['detalle'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden</title>
    <style type="text/css">
        p{
            font-family: lato;
            letter-spacing: 1px;
            color: #7f7f7f;
            font-size: 12px;
        }
        hr{
            border: 0;
            border-top: 1px solid #ccc;
        }
        h4{
            font-family: lato;
            margin: 0;
        }
        table{
            width: 100%;
            max-width: 600px;
            margin: 10px auto;
            border: 1px solid #ccc;
        }
        table tr td, table tr th{
            padding: 5px 10px;
            font-family: lato;
            font-size: 12px;
        }
        #detalleOrden tr td{
            border: 1px solid #ccc;
        }
        .table-active{
            background-color: #322C40;
            color: white;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }

        @media screen and (max-width: 470px){
            .logo{width: 90px;}
            p, table tr td, table tr th{font-size: 9px;}
        }
    </style>
</head>
<body>
    <div>
        <br>
        <p class="text-center">Se ga generado una orden de pago, a continuación encontraras los datos de tu compra.</p>
        <br>
        <hr>
        <br>
        <table>
            <tr>
                <td width="33.33%">
                    <img class="logo" src="https://i.imgur.com/P5fwFtr.png" alt="Logo">
                </td>
                <td width="33.33%">
                    <div class="text-center">
                        <h4><strong><?= NOMBRE_EMPRESA ?></strong></h4>
                        <p><br>
                            <?= DIRECCION ?> <br>
                            <?= TELEMPRESA ?> <br>
                            <?= EMAIL_EMPRESA ?>
                        </p>
                    </div>
                </td>
                <td width="33.33%">
                    <div class="text-right">
                        <p>
                            N° de Orden: <strong><?= $orden['idpedido'] ?></strong><br>
                            Fecha: <?= $orden['fecha'] ?> <br>
                            <?php if($orden['tipopagoid'] == 1){ ?>
                            Método de pago: <?= $orden['tipopago'] ?> <br>
                            Transaccion: <?= $orden['idtransaccionpaypal'] ?>
                            <?php }else{ ?>
                                Método de pago: Pago contraentrega <br>
                                Tipo de pago: <?= $orden['tipopago'] ?>
                            <?php } ?>   
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="140">Nombre:</td>
                <td><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><?= $_SESSION['userData']['telefono']?></td>
            </tr>
            <tr>
                <td>Dirección de envío: </td>
                <td><?= $orden['direccion_envio'] ?></td>
            </tr>
        </table>
        <table>
            <thead class="table-active">
                <tr>
                    <th>Descripción</th>
                    <th class="text-right">Precio</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-right">Importe</th>
                </tr>
            </thead>
            <tbody id="detalleOrden">
            <?php 
            if(count($detalle) > 0){
                $subtotal = 0;
                foreach ($detalle as $producto){
                    $precio = $producto['precio'];
                    $importe = ($producto['precio'] * $producto['cantidad']);
                    $subtotal += $importe; 
            ?>
    
                <tr>
                    <td><?= $producto['producto'] ?></td>
                    <td class="text-right"><?= SMONEY.' '.$precio ?></td>
                    <td class="text-center"><?= $producto['cantidad'] ?></td>
                    <td class="text-right"><?= SMONEY.' '.$importe ?></td>
                </tr>
                <?php }
                } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Subtotal: </th>
                    <td class="text-right"><?= SMONEY.' '.$subtotal ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Envío: </th>
                    <td class="text-right"><?= SMONEY.' '.$orden['costo_envio'] ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Total: </th>
                    <td class="text-right"><?= SMONEY.' '.$orden['monto'] ?></td>
                </tr>
            </tfoot>
        </table>
        <div class="text-center">
            <p>Si tiene dudas o inquietudes sobre su pedido <br>por favor contactenos a los números o medios de contacto.</p>
            <h4>¡Gracias por su compra!</h4>
        </div>
    </div>
</body>
</html>