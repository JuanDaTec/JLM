// Flipbox del login
$('.login-content [data-toggle="flip"]').click(function () {
  $('.login-box').toggleClass('flipped');
  return false;
});


document.addEventListener('DOMContentLoaded', function () {

  if (document.querySelector("#formLogin")) {


    let formLogin = document.querySelector("#formLogin");
    formLogin.onsubmit = function (e) {
      e.preventDefault();

      let strEmail = document.querySelector('#txtEmail').value;
      let strPassword = document.querySelector('#txtPassword').value;

      if (strEmail == "" || strPassword == "") {
        swal("Error", "Escribe tu e-mail y tu contraseña.", "error");
        return false;
      } else {
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url + '/Login/loginUser';
        var formData = new FormData(formLogin);
        request.open("POST", ajaxUrl, true);
        request.send(formData);

        request.onreadystatechange = function () {

          if (request.readyState != 4) return;
          if (request.status == 200) {
            var objData = JSON.parse(request.responseText);
            if (objData.status) {
              window.location = base_url + '/dashboard';
            } else {
              swal("¡Atención!", objData.msg, "error");
              document.querySelector('#txtPassword').value = "";
            }
          } else {
            swal("Atención", "Error en el proceso", "error");
          }

          return false;

        }
      }
    }
  }


  if (document.querySelector("#formRecetPass")) {
    let formRecetPass = document.querySelector("#formRecetPass");
    formRecetPass.onsubmit = function (e) {
      e.preventDefault();

      let strEmail = document.querySelector('#txtEmailReset').value;
      if (strEmail == "") {
        swal("Oye...", "Por favor escribe tu correo electrónico.", "error");
        return false;
      } else {
        var request = (window.XMLHttpRequest) ?
          new XMLHttpRequest() :
          new ActiveXObject('Microsoft.XMLHTTP');

        var ajaxUrl = base_url + '/Login/resetPass';
        var formData = new FormData(formRecetPass);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function () {
          if (request.readyState != 4) return;

          if (request.status == 200) {
            var objData = JSON.parse(request.responseText);
            if (objData.status) {
              swal({
                title: "",
                text: objData.msg,
                type: "success",
                confirmButtonText: "Aceptar",
                closeOnConfirm: false,
              }, function (isConfirm) {
                if (isConfirm) {
                  window.location = base_url;
                }
              });
            } else {
              swal("Lo sentimos", objData.msg, "error");
            }
          } else {
            swal("Lo sentimos", "Error en el proceso", "error");
          }
        }

      }
    }
  }


}, false);