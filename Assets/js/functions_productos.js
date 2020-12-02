document.write(`<script src="${base_url}/Assets/js/plugins/JsBarcode.all.min.js"></script>`);

$(document).on('focusin', function(e) {
    if ($(e.target).closest(".tox-dialog").length) {
        e.stopImmediatePropagation();
    }
});

if(document.querySelector("#txtCodigo")){
    let inputCodigo = document.querySelector("#txtCodigo");
    inputCodigo.onkeyup = function(){
        if(inputCodigo.value.length >= 5){
            document.querySelector('#divBarCode').classList.remove("notBlock");
            fntBarcode();
        }else{
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

function fntBarcode(){
    let codigo = document.querySelector('#txtCodigo').value;
    JsBarcode('#barcode', codigo);
}

function fntPrintBarcode(area){
    let elemntArea = document.querySelector(area);
    let vprint = window.open(' ','popimpr','height=400,width=600');
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
