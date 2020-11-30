<!-- Modal del usuarios-->
<div class="modal fade" id="modalFormCliente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5><img class="form_title" src="<?= media(); ?>/images/form_title.png" alt="User Image"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <h3 class="tile-title" id="titleModal">Nuevo usuario</h3>
                    <div class="tile-body">
                        <form id="formCliente" name="formCliente" class="form-horizontal">
                            <input type="hidden" id="idUsuario" name="idUsuario" value="">
                            <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="txtIdentificacion">N° Cedula <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="txtNombre">Nombres <span class="required">*</span></label>
                                    <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="txtApellido">Apellidos <span class="required">*</span></label>
                                    <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" required="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="txtTelefono">Teléfono <span class="required">*</span></label>
                                    <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" required="" onkeypress="return controlTag(event);">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="txtEmail">Correo electronico <span class="required">*</span></label>
                                    <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="txtPassword">Contraseña </label>
                                    <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                                </div>
                            </div>
                            <hr>
                            <p class="text-primary"><strong>Datos de facturación</strong></p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Identificación o NIT <span class="required">*</span></label>
                                    <input class="form-control" type="text" id="txtNit" name="txtNit" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nombre o razón social <span class="required">*</span></label>
                                    <input class="form-control" type="text" id="txtNombreFact" name="txtNombreFact" required="">
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Dirección <span class="required">*</span></label>
                                    <input class="form-control" type="text" id="txtDirFact" name="txtDirFact" required="">
                                </div>

                            </div>
                            <div class="form-row">

                            </div>

                            <div class="tile-footer">
                                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fas fa-save"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal del usuarios-->
<div class="modal fade" id="modalViewCliente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5><img class="form_title" src="<?= media(); ?>/images/form_title.png" alt="User Image"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <h3 class="tile-title" id="titleModal">Datos del cliente</h3>
                    <div class="tile-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Identificación:</strong></td>
                                    <td id="celIdentificacion"></td>
                                </tr>
                                <tr>
                                    <td><strong>Nombres:</strong></td>
                                    <td id="celNombre"></td>
                                </tr>
                                <tr>
                                    <td><strong>Apellidos:</strong></td>
                                    <td id="celApellido"></td>
                                </tr>
                                <tr>
                                    <td><strong>Teléfono:</strong></td>
                                    <td id="celTelefono"></td>
                                </tr>
                                <tr>
                                    <td><strong>Email (Cliente):</strong></td>
                                    <td id="celEmail"></td>
                                </tr>
                                <tr>
                                    <td><strong>Identificación o NIT:</strong></td>
                                    <td id="celIde"></td>
                                </tr>
                                <tr>
                                    <td><strong>Nombre o razón social:</strong></td>
                                    <td id="celNomFact"></td>
                                </tr>
                                <tr>
                                    <td><strong>Dirección:</strong></td>
                                    <td id="celDirFact"></td>
                                </tr>
                                <tr>
                                    <td><strong>Fecha de registro:</strong></td>
                                    <td id="celFechaRegistro"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>