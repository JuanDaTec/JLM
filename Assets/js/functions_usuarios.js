var tableUsuarios;
var divLoadingOther = document.querySelector("#divLoadingOther");
document.addEventListener('DOMContentLoaded', function () {

    tableUsuarios = $('#tableUsuarios').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Usuarios/getUsuarios",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idpersona" },
            { "data": "nombres" },
            { "data": "apellidos" },
            { "data": "email_user" },
            { "data": "telefono" },
            { "data": "nombrerol" },
            { "data": "status" },
            { "data": "options" }
        ],
        'dom': 'lBfrtip',
        'buttons': [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i>",
                "titleAttr": "Copiar elementos",
                "className": "btn btn-secondary",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5]
                }
            }, {
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i>",
                "titleAttr": "Exportar a Excel",
                "className": "btn btn-success",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5]
                }
            }, {
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-file-pdf'></i>",
                "titleAttr": "Exportar a PDF",
                "className": "btn btn-danger",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5]
                }
            }, {
                "extend": "csvHtml5",
                "text": "<i class='fas fa-file-csv'></i>",
                "titleAttr": "Exportar a CSV",
                "className": "btn btn-info",
                "exportOptions": {
                    "columns": [0, 1, 2, 3, 4, 5]
                }
            }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 5,
        "order": [[0, "desc"]],
    });

    if (document.querySelector("#formUsuario")) {

        var formUsuario = document.querySelector("#formUsuario");
        formUsuario.onsubmit = function (e) {
            e.preventDefault();
            var strIdentificacion = document.querySelector('#txtIdentificacion').value;
            var strNombre = document.querySelector('#txtNombre').value;
            var strApellido = document.querySelector('#txtApellido').value;
            var strEmail = document.querySelector('#txtEmail').value;
            var intTelefono = document.querySelector('#txtTelefono').value;
            var intTipousuario = document.querySelector('#listRolid').value;
            var strPassword = document.querySelector('#txtPassword').value;

            if (strIdentificacion == '' || strApellido == '' || strNombre == '' || strEmail == '' || intTelefono == '' || intTipousuario == '') {
                swal("¡Atención!", "Todos los campos son obligatorios.", "error");
                return false;
            }


            let elementsValid = document.getElementsByClassName("valid");
            for (let i = 0; i < elementsValid.length; i++) {
                if (elementsValid[i].classList.contains('is-invalid')) {
                    swal("¡Atención!", "Por favor verifique los campos en rojo.", "error");
                    return false;
                }
            }

            divLoadingOther.style.display = "flex";
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Usuarios/setUsuario';
            var formData = new FormData(formUsuario);
            request.open("POST", ajaxUrl, true);
            request.send(formData);
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        $('#modalFormUsuario').modal("hide");
                        formUsuario.reset();
                        swal("¡Correcto!", objData.msg, "success");
                        tableUsuarios.api().ajax.reload();
                    } else {
                        swal("¡Oops!", objData.msg, "error");
                    }
                }
                divLoadingOther.style.display = "none";
                return false;
            }
        }
    }
    //Actualizar perfil de usuario
    if (document.querySelector("#formPerfil")) {
        var formPerfil = document.querySelector("#formPerfil");
        formPerfil.onsubmit = function (e) {
            e.preventDefault();
            var strIdentificacion = document.querySelector('#txtIdentificacion').value;
            var strNombre = document.querySelector('#txtNombre').value;
            var strApellido = document.querySelector('#txtApellido').value;
            var intTelefono = document.querySelector('#txtTelefono').value;
            var strPassword = document.querySelector('#txtPassword').value;
            var strPasswordConfirm = document.querySelector('#txtPasswordConfirm').value;

            if (strIdentificacion == '' || strApellido == '' || strNombre == '' || intTelefono == '') {
                swal("¡Atención!", "Todos los campos son obligatorios.", "error");
                return false;
            }

            if (strPassword != "" || strPasswordConfirm != "") {
                if (strPassword != strPasswordConfirm) {
                    swal("Atención", "Las contraseñas no coinciden, verifica nuevamente.", "info");
                    return false;
                }
                if (strPassword.length < 5) {
                    swal("Atención", "La contraseña debe tener un mínimo de 5 caracteres.", "info");
                    return false;
                }
            }

            let elementsValid = document.getElementsByClassName("valid");
            for (let i = 0; i < elementsValid.length; i++) {
                if (elementsValid[i].classList.contains('is-invalid')) {
                    swal("¡Atención!", "Por favor verifica los campos marcados en rojo.", "error");
                    return false;
                }
            }
            divLoadingOther.style.display = "flex";
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Usuarios/putPerfil';
            var formData = new FormData(formPerfil);
            request.open("POST", ajaxUrl, true);
            request.send(formData);
            request.onreadystatechange = function () {
                if (request.readyState != 4) return;
                if (request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        $('#modalFormPerfil').modal("hide");
                        swal({
                            title: "",
                            text: objData.msg,
                            type: "success",
                            confirmButtonText: "¡Vale!",
                            closeOnConfirm: false,
                        }, function (isConfirm) {
                            if (isConfirm) {
                                location.reload();
                            }
                        });
                    } else {
                        swal("Error", objData.msg, "error");
                    }
                }
                divLoadingOther.style.display = "none";
                return false;
            }
        }
    }
    //Actualizar datos de facturación
    if (document.querySelector("#formDataFact")) {
        var formDataFact = document.querySelector("#formDataFact");
        formDataFact.onsubmit = function (e) {
            e.preventDefault();
            var strNit = document.querySelector('#txtNit').value;
            var strNombreFact = document.querySelector('#txtNombreFact').value;
            var strDirFact = document.querySelector('#txtDirFact').value;

            if (strNit == '' || strNombreFact == '' || strDirFact == '') {
                swal("¡Atención!", "Todos los campos son obligatorios.", "error");
                return false;
            }

            divLoadingOther.style.display = "flex";

            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Usuarios/putDFact';
            var formData = new FormData(formDataFact);
            request.open("POST", ajaxUrl, true);
            request.send(formData);
            request.onreadystatechange = function () {
                if (request.readyState != 4) return;
                if (request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        $('#modalFormPerfil').modal("hide");
                        swal({
                            title: "",
                            text: objData.msg,
                            type: "success",
                            confirmButtonText: "¡Vale!",
                            closeOnConfirm: false,
                        }, function (isConfirm) {
                            if (isConfirm) {
                                location.reload();
                            }
                        });
                    } else {
                        swal("Error", objData.msg, "error");
                    }
                }
                divLoadingOther.style.display = "none";
                return false;
            }
        }
    }

}, false);


window.addEventListener('load', function () {
    setTimeout(() => {
        fntRolesUsuario();
        /*fntViewUsuario();
        fntEditUsuario();
        fntDelUsuario();*/
    }, 500);
}, false);


function fntRolesUsuario() {
    if (document.querySelector('#listRolid')) {
        var ajaxUrl = base_url + '/Roles/getSelectRoles';
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        request.open("GET", ajaxUrl, true);
        request.send();

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                document.querySelector('#listRolid').innerHTML = request.responseText;
                //document.querySelector('#listRolid').value = 2;
                $('#listRolid').selectpicker('render');
            }
        }
    }
}

function fntViewUsuario(idpersona) {
    var idpersona = idpersona;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url + '/Usuarios/getUsuario/' + idpersona;
    request.open("GET", ajaxUrl, true);
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var objData = JSON.parse(request.responseText);

            if (objData.status) {
                var estadoUsuario = objData.data.status == 1 ?
                    '<span class="badge badge-success">Habilitado</span>' :
                    '<span class="badge badge-danger">Deshabilitado</span>';

                document.querySelector("#celIdentificacion").innerHTML = objData.data.identificacion;
                document.querySelector("#celNombre").innerHTML = objData.data.nombres;
                document.querySelector("#celApellido").innerHTML = objData.data.apellidos;
                document.querySelector("#celTelefono").innerHTML = objData.data.telefono;
                document.querySelector("#celEmail").innerHTML = objData.data.email_user;
                document.querySelector("#celTipoUsuario").innerHTML = objData.data.nombrerol;
                document.querySelector("#celEstado").innerHTML = estadoUsuario;
                document.querySelector("#celFechaRegistro").innerHTML = objData.data.fechaRegistro;
                $('#modalViewUser').modal('show');
            } else {
                swal("Error", objData.msg, "error");
            }
        }
    }
}

function fntEditUsuario(idpersona) {
    document.querySelector('#titleModal').innerHTML = "Actualizar Usuario";
    document.querySelector('#btnText').innerHTML = "Actualizar";

    var idpersona = idpersona;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url + '/Usuarios/getUsuario/' + idpersona;
    request.open("GET", ajaxUrl, true);
    request.send();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {
            var objData = JSON.parse(request.responseText);

            if (objData.status) {
                document.querySelector("#idUsuario").value = objData.data.idpersona;
                document.querySelector("#txtIdentificacion").value = objData.data.identificacion;
                document.querySelector("#txtNombre").value = objData.data.nombres;
                document.querySelector("#txtApellido").value = objData.data.apellidos;
                document.querySelector("#txtTelefono").value = objData.data.telefono;
                document.querySelector("#txtEmail").value = objData.data.email_user;
                document.querySelector("#listRolid").value = objData.data.idrol;
                $('#listRolid').selectpicker('render');

                if (objData.data.status == 1) {
                    document.querySelector("#listStatus").value = 1;
                } else {
                    document.querySelector("#listStatus").value = 2;
                }
                $('#listStatus').selectpicker('render');
            }
        }

        $('#modalFormUsuario').modal('show');
    }
}

function fntDelUsuario(idpersona) {

    var idUsuario = idpersona;
    swal({
        title: "Eliminar usuario",
        text: "¿Estas seguro de eliminar el usuario seleccionado?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, ¡Eliminar!",
        cancelButtonText: "No, ¡Cancelar!",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function (isConfirm) {

        if (isConfirm) {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Usuarios/delUsuario';
            var strData = "idUsuario=" + idUsuario;
            request.open("POST", ajaxUrl, true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        swal("Eliminar!", objData.msg, "success");
                        tableUsuarios.api().ajax.reload();
                    } else {
                        swal("Atención!", objData.msg, "error");
                    }
                }
            }
        }

    });

}

function openModal() {
    document.querySelector('#idUsuario').value = "";
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Usuario";
    document.querySelector("#formUsuario").reset();
    $('#modalFormUsuario').modal('show');
}

function openModalPerfil() {
    $('#modalFormPerfil').modal('show');
}
