document.write(`<script src="${base_url}/Assets/js/plugins/JsBarcode.all.min.js"></script>`);
let tableProductos;
var divLoadingOther = document.querySelector("#divLoadingOther");


$(document).on('focusin', function (e) {
    if ($(e.target).closest(".tox-dialog").length) {
        e.stopImmediatePropagation();
    }
});

window.addEventListener("load", function () {
    tableProductos = $('#tableProductos').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Productos/getProductos",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idproducto" },
            { "data": "codigo" },
            { "data": "nombre" },
            { "data": "stock" },
            { "data": "precio" },
            { "data": "status" },
            { "data": "options" }
        ],
        "columnDefs": [
            { 'className': "textcenter", "targets": [3] },
            { 'className': "textright", "targets": [4] },
            { 'className': "textcenter", "targets": [5] }
        ],

        'dom': 'lBfrtip',
        'buttons': [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i>",
                "titleAttr": "Copiar elementos",
                "className": "btn btn-secondary",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5, 6]
                }

            }, {
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i>",
                "titleAttr": "Exportar a Excel",
                "className": "btn btn-success",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5, 6]
                }
            }, {
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-file-pdf'></i>",
                "titleAttr": "Exportar a PDF",
                "className": "btn btn-danger",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5, 6]
                }
            }, {
                "extend": "csvHtml5",
                "text": "<i class='fas fa-file-csv'></i>",
                "titleAttr": "Exportar a CSV",
                "className": "btn btn-info",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5, 6]
                }
            }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0, "desc"]]
    });

    if (document.querySelector("#formProductos")) {
        let formProductos = document.querySelector("#formProductos");
        formProductos.onsubmit = function (e) {
            e.preventDefault();
            let strNombre = document.querySelector('#txtNombre').value;
            let intCodigo = document.querySelector('#txtCodigo').value;
            let strPrecio = document.querySelector('#txtPrecio').value;
            let intStock = document.querySelector('#txtStock').value;

            if (strNombre == '' || intCodigo == '' || strPrecio == '' || intStock == '') {
                swal("¡Atención!", "Todos los campos son obligatorios.", "error");
                return false;
            }
            if (intCodigo.length < 5) {
                swal("¡Atención!", "El código del producto debe ser mayor a 5 dígitos", "error");
                return false;
            }
            divLoadingOther.style.display = "flex";
            tinyMCE.triggerSave();
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url + '/Productos/setProducto';
            let formData = new FormData(formProductos);
            request.open("POST", ajaxUrl, true);
            request.send(formData);
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    let objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        swal("", objData.msg ,"success");
                        tableProductos.api().ajax.reload();
                        document.querySelector("#idProducto").value = objData.idproducto;
                    }else{
                        swal("Error", objData.msg , "error");
                    }              
                }
                divLoadingOther.style.display = "none";
            }
        }
    }

    setTimeout(() => {
        fntCategorias();
    }, 500);
}, false);

if (document.querySelector("#txtCodigo")) {
    let inputCodigo = document.querySelector("#txtCodigo");
    inputCodigo.onkeyup = function () {
        if (inputCodigo.value.length >= 5) {
            document.querySelector('#divBarCode').classList.remove("notBlock");
            fntBarcode();
        } else {
            document.querySelector('#divBarCode').classList.add("notBlock");
        }
    };
}


tinymce.init({
    selector: '#txtDescripcion',
    width: "100%",
    height: 400,
    statubar: true,
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
});

function fntCategorias() {
    if (document.querySelector('#listCategoria')) {
        let ajaxUrl = base_url + '/Categorias/getSelectCategorias';
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHttpRequest');
        request.open("GET", ajaxUrl, true);
        request.send();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                document.querySelector('#listCategoria').innerHTML = request.responseText;
                $('#listCategoria').selectpicker('render');
            }
        }
    }
}

function fntBarcode() {
    let codigo = document.querySelector('#txtCodigo').value;
    JsBarcode('#barcode', codigo);
}

function fntPrintBarcode(area) {
    let elemntArea = document.querySelector(area);
    let vprint = window.open(' ', 'popimpr', 'height=400,width=600');
    vprint.document.write(elemntArea.innerHTML);
    vprint.document.close();
    vprint.print();
    vprint.close();
}

function openModal() {
    document.querySelector('#idProducto').value = "";
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo producto";
    document.querySelector("#formProductos").reset();
    $('#modalFormProductos').modal('show');
}
