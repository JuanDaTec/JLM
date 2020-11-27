<?php
    headerAdmin($data);
    getModal('modalUsuarios', $data);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-users"></i> <?= $data['page_title'] ?>
                <?php if($_SESSION['permisosMod']['w']){ ?>
                <span> &nbsp;&nbsp; | &nbsp;&nbsp; </span>
                <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Crear</button>
                <?php } ?>   
            </h1>
            <p>&nbsp;</p>
            <p>Administra los usuarios que se encuentran en el sistema.</p>
        </div>
        <img class="form_title_bread" src="<?= media(); ?>/images/logo_alt1.png" alt="User Image">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableUsuarios">
                            <thead>
                                <tr>
                                    <th><strn>ID</th>
                                    <th><strn>Nombres</th>
                                    <th><strn>Apellidos</th>
                                    <th><strn>Email</th>
                                    <th><strn>Teléfono</th>
                                    <th><strn>Rol</th>
                                    <th><strn>Status</th>
                                    <th><strn>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>