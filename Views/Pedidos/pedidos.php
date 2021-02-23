<?php
headerAdmin($data);
//getModal('modalProductos', $data);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-box"></i> <?= $data['page_title'] ?>
            </h1>
            <p>&nbsp;</p>
            <p>Administra los pedidos realizados en JLM WorkShop.</p>
        </div>
        <img class="form_title_bread" src="<?= media(); ?>/images/logo_alt1.png" alt="User Image">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tablePedidos">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ref. / Transacción</th>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                    <th>Tipo Pago</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>