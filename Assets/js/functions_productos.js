document.write(´<script src="${base_url}/Assets/js/plugins/JsBarcode.all.min.js"></script>`)

$(document).on('focusin', function(e) {
    if ($(e.target).closest(".tox-dialog").length) {
        e.stopImmediatePropagation();
    }
});


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

function openModal() {
    document.querySelector('#idProducto').value = "";
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo producto";
    document.querySelector("#formProductos").reset();
    $('#modalFormProductos').modal('show');
}
