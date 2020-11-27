<?php
headerAdmin($data);
getModal('modalRoles', $data);
?>
<div id="contentAjax"></div>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
                <?php if($_SESSION['permisosMod']['w']){ ?>
                    <span> &nbsp;&nbsp; | &nbsp;&nbsp; </span>
                    <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Crear</button>
                <?php } ?>   
            </h1>
            <p>&nbsp;</p>
            <p>Adapta los roles del sistema a tus necesidades.</p>
        </div>
        <img class="form_title_bread" src="<?= media(); ?>/images/logo_alt1.png" alt="User Image">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableRoles">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Status</th>
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