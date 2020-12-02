<!-- Modal del usuarios-->
<div class="modal fade" id="modalFormCategorias" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h3 class="tile-title" id="titleModal">Nueva categoría</h3>
                    <div class="tile-body">
                        <form id="formCategoria" name="formCategoria" class="form-horizontal">
                            <input type="hidden" id="idCategoria" name="idCategoria" value="">
                            <input type="hidden" id="foto_actual" name="foto_actual" value="">
                            <input type="hidden" id="foto_remove" name="foto_remove" value="0">

                            <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nombre <span class="required">*</span></label>
                                        <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre categoría" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Descripción <span class="required">*</span></label>
                                        <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción categoría" required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect1">Estado <span class="required">*</span></label>
                                        <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                                            <option value="1">Habilitado</option>
                                            <option value="2">Deshabilitado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="photo">
                                        <label for="foto"><strong>Fotografía:</strong><br>
                                            <p>Tamaño: (570x380)</p>
                                        </label>
                                        <div class="prevPhoto">
                                            <span class="delPhoto notBlock">X</span>
                                            <label for="foto"></label>
                                            <div>
                                                <img id="img" src="<?= media(); ?>/images/uploads/portada_categoria.png">
                                            </div>
                                        </div>
                                        <div class="upimg">
                                            <input type="file" name="foto" id="foto">
                                        </div>
                                        <div id="form_alert"></div>
                                    </div>


                                </div>
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