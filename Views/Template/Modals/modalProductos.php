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
                                        <label class="control-label"><strong>Nombre del producto</strong><span class="required">*</span></label>
                                        <input class="form-control" id="txtNombre" name="txtNombre" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"><strong>Descripción del producto</strong></label>
                                        <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Código</strong><span class="required">*</span></label>
                                        <input class="form-control" id="txtCodigo" name="txtCodigo" type="text" placeholder="Código de barras" required="">
                                        <br>
                                        <div id="divBarCode" class="notBlock textcenter">
                                            <div id="printCode">
                                                <svg id="barcode"></svg>
                                            </div>
                                            <button class="btn btn-primary btn-sm" type="button" onClick="fntPrintBarcode('#printCode')"><i class="fas fa-print"></i> &nbsp; Imprimir</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label"><strong>Precio</strong> <span class="required">*</span></label>
                                            <input class="form-control" id="txtPrecio" name="txtPrecio" type="text" required="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label"><strong>Stock</strong> <span class="required">*</span></label>
                                            <input class="form-control" id="txtStock" name="txtStock" type="text" required="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="listCategoria"><strong>Categoría</strong> <span class="required">*</span></label>
                                            <select class="form-control" data-live-search="true" id="listCategoria" name="listCategoria" required=""></select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="listStatus"><strong>Estado</strong> <span class="required">*</span></label>
                                            <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                                                <option value="1">Habilitado</option>
                                                <option value="2">Deshabilitado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <button id="btnActionForm" class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fas fa-save"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-secondary btn-block" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="tile-footer">
                        <div class="form-group col-md-12">
                            <div id="containerGallery">
                                <span>Agregar imágenes del producto (440 x 545)&nbsp;&nbsp;</span>
                                <button class="btnAddImage btn btn-info btn-sm" type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <hr>
                            <div id="containerImages">
                                <!-- <div id="div24">
                             <div class="prevImage">
                                 <img src="<?= media(); ?>/images/uploads/producto1.jpg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div>
                         <div id="div24">
                             <div class="prevImage">
                                 <img class="loading" src="<?= media(); ?>/images/loading.svg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div> -->

                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal del usuarios-->
<div class="modal fade" id="modalViewProducto" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h3 class="tile-title" id="titleModal">Datos del producto</h3>
                    <div class="tile-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Código:</strong></td>
                                    <td id="celCodigo"></td>
                                </tr>
                                <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td id="celNombre"></td>
                                </tr>
                                <tr>
                                    <td><strong>Precio:</strong></td>
                                    <td id="celPrecio"></td>
                                </tr>
                                <tr>
                                    <td><strong>Stock:</strong></td>
                                    <td id="celStock"></td>
                                </tr>
                                <tr>
                                    <td><strong>Categoría:</strong></td>
                                    <td id="celCategoria"></td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <td id="celStatus"></td>
                                </tr>
                                <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td id="celDescripcion"></td>
                                </tr>
                                <tr>
                                    <td><strong>Galería del producto:</strong></td>
                                    <td id="celFotos"></td>
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