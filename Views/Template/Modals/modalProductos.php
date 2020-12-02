<!-- Modal del usuarios-->
<div class="modal fade" id="modalFormProductos" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5><img class="form_title" src="<?= media(); ?>/images/form_title.png" alt="User Image"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <h3 class="tile-title" id="titleModal">Nueva categoría</h3>
                    <div class="tile-body">
                        <form id="formProductos" name="formProductos" class="form-horizontal">
                            <input type="hidden" id="idProducto" name="idProducto" value="">

                            <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Nombre del producto<span class="required">*</span></label>
                                        <input class="form-control" id="txtNombre" name="txtNombre" type="text"  required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Descripción del producto</label>
                                        <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Código<span class="required">*</span></label>
                                        <input class="form-control" id="txtCodigo" name="txtCodigo" type="text" placeholder="Código de barras" required="">
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Precio <span class="required">*</span></label>
                                            <input class="form-control" id="txtPrecio" name="txtPrecio" type="text" required="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Stock <span class="required">*</span></label>
                                            <input class="form-control" id="txtStock" name="txtStock" type="text" required="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="listCategoria">Categoría <span class="required">*</span></label>
                                            <select class="form-control" data-live-search="true" id="listCategoria" name="listCategoria" required=""></select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="listStatus">Estado <span class="required">*</span></label>
                                            <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                                                <option value="1">Habilitado</option>
                                                <option value="2">Deshabilitado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <button id="btnActionForm" class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-fw fa-lg fas fa-save"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-secondary btn-lg btn-block" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="tile-footer">


                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal del usuarios-->
<div class="modal fade" id="modalViewCategoria" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h3 class="tile-title" id="titleModal">Datos de la categoría</h3>
                    <div class="tile-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>ID:</strong></td>
                                    <td id="celId"></td>
                                </tr>
                                <tr>
                                    <td><strong>Nombres:</strong></td>
                                    <td id="celNombre"></td>
                                </tr>
                                <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td id="celDescripcion"></td>
                                </tr>
                                <tr>
                                    <td><strong>Estado:</strong></td>
                                    <td id="celEstado"></td>
                                </tr>
                                <tr>
                                    <td><strong>Foto:</strong></td>
                                    <td id="imgCategoria"></td>
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