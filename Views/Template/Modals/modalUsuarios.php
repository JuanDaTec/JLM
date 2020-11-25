<!-- Modal del usuarios-->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <form id="formUsuario" name="formUsuario" class="form-horizontal">
                            <input type="hidden" id="idUsuario" name="idUsuario" value="">
                            <p class="text-primary">Todos los campos son obligatorios.</p>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtIdentificacion">N° de cedula</label>
                                    <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtNombre">Nombres</label>
                                    <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txtApellido">Apellidos</label>
                                    <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" required="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtTelefono">Teléfono</label>
                                    <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" required="" onkeypress="return controlTag(event);"> 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txtEmail">Correo electronico</label>
                                    <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="listRolid">Tipo de usuario</label>
                                    <select class="form-control" data-live-search="true" id="listRolid" name="listRolid" required>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="listStatus">Estado</label>
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required>
                                        <option value="1">Habilitado</option>
                                        <option value="2">Deshabilitado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtPassword">Password</label>
                                    <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                                </div>
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
<div class="modal fade" id="modalViewUser" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h3 class="tile-title" id="titleModal">Datos del usuario</h3>
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
                                    <td><strong>Email (Usuario):</strong></td>
                                    <td id="celEmail"></td>
                                </tr>
                                <tr>
                                    <td><strong>Tipo Usuario:</strong></td>
                                    <td id="celTipoUsuario"></td>
                                </tr>
                                <tr>
                                    <td><strong>Estado:</strong></td>
                                    <td id="celEstado"></td>
                                </tr>
                                <tr>
                                    <td><strong>Fecha registro:</strong></td>
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