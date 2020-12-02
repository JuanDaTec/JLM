<?php
headerAdmin($data);
getModal('modalProductos', $data);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-tshirt"></i> <?= $data['page_title'] ?>
                <?php if ($_SESSION['permisosMod']['w']) { ?>
                    <span> &nbsp;&nbsp; | &nbsp;&nbsp; </span>
                    <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Crear</button>
                <?php } ?>
            </h1>
            <p>&nbsp;</p>
            <p>Administra los productos de JLM en detalle.</p>
        </div>
        <img class="form_title_bread" src="<?= media(); ?>/images/logo_alt1.png" alt="User Image">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableProductos">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
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