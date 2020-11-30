document.addEventListener('DOMContentLoaded', function(){



    if(document.querySelector("#foto")){
        var foto = document.querySelector("#foto");
        foto.onchange = function(e) {
            var uploadFoto = document.querySelector("#foto").value;
            var fileimg = document.querySelector("#foto").files;
            var nav = window.URL || window.webkitURL;
            var contactAlert = document.querySelector('#form_alert');
            if(uploadFoto !=''){
                var type = fileimg[0].type;
                var name = fileimg[0].name;
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png'){
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
                    if(document.querySelector('#img')){
                        document.querySelector('#img').remove();
                    }
                    document.querySelector('.delPhoto').classList.add("notBlock");
                    foto.value="";
                    return false;
                }else{  
                        contactAlert.innerHTML='';
                        if(document.querySelector('#img')){
                            document.querySelector('#img').remove();
                        }
                        document.querySelector('.delPhoto').classList.remove("notBlock");
                        var objeto_url = nav.createObjectURL(this.files[0]);
                        document.querySelector('.prevPhoto div').innerHTML = "<img id='img' src="+objeto_url+">";
                    }
            }else{
                alert("No selecciono foto");
                if(document.querySelector('#img')){
                    document.querySelector('#img').remove();
                }
            }
        }
    }
    
    if(document.querySelector(".delPhoto")){
        var delPhoto = document.querySelector(".delPhoto");
        delPhoto.onclick = function(e) {
            removePhoto();
        }
    }

    	//Nueva Categoria
        var formCategoria = document.querySelector("#formCategoria");
        formCategoria.onsubmit = function(e) {
            e.preventDefault();
            var intIdCategoria = document.querySelector('#idCategoria');
            var strNombre = document.querySelector('#txtNombre').value;
            var strDescripcion = document.querySelector('#txtDescripcion').value;
            var intStatus = document.querySelector('#listStatus').value;        
            if(strNombre == '' || strDescripcion == '' || intStatus == '')
            {
                swal("Atención", "Todos los campos son obligatorios." , "error");
                return false;
            }
            divLoadingOther.style.display = "flex";
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Categorias/setCategoria'; 
            var formData = new FormData(formCategoria);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
               if(request.readyState == 4 && request.status == 200){
                    
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        $('#modalFormCategorias').modal("hide");
                        formCategoria.reset();
                        swal("Categoria", objData.msg ,"success");
                        //removePhoto();
                        //tableCategorias.api().ajax.reload();
                    }else{
                        swal("Error", objData.msg , "error");
                    }              
                } 
                divLoadingOther.style.display = "none";
                return false;
            }
        }

}, false);

function removePhoto(){
    document.querySelector('#foto').value ="";
    document.querySelector('.delPhoto').classList.add("notBlock");
    document.querySelector('#img').remove();
}


function openModal()
{
    document.querySelector('#idCategoria').value ="";
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nueva categoría";
    document.querySelector("#formCategoria").reset();
    $('#modalFormCategorias').modal('show');
}

