<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="JuanDaTec">
    <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">

    <title><?= $data['page_tag'] ?></title>
    </title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <img class="form_title_login" src="<?= media(); ?>/images/logo_alt1.png">
        </div>
        <div class="login-box">
            <div id="divLoading">
                <div>
                    <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
                </div>
            </div>
            <div id="divLoading2">
                <div>
                    <img src="<?= media(); ?>/images/start_session.png" alt="Loading">
                </div>
            </div>
            <form class="login-form" action="" name="formLogin" id="formLogin">
                <h3 class="text-center"><i class="fa fa-lg fa-fw fa-user"></i></h3>
                <h3 class="login-head">¡Bienvenido!</h3>
                <div class="form-group">
                    <label class="control-label">USUARIO</label>
                    <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Correo electrónico" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">CONTRASEÑA</label>
                    <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
                </div>
                <div class="form-group text-center">
                    <div class="utility">
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">¿Has olvidado tu contraseña?</a></p>
                    </div>
                </div>
                <div id="alertLogin" class="text-center"></div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block">INICIAR SESIÓN</button>
                </div>
                <br>
                <div class="text-center">
                    <p class="semibold-text mb-2"><a href="<?= base_url(); ?>">Volver al inicio</a></p>
                </div>
            </form>
            <form id="formRecetPass" id="formRecetPass" class="forget-form" action="">
                <h5 class="text-center"><i class="fa fa-lg fa-fw fa-lock"></i></h5>
                <h5 class="login-head">¿Olvidaste tu contraseña?</h5>
                <div class="form-group">
                    <label class="control-label">Correo electrónico</label>
                    <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="ejemplo@jlmworkshop.com">
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block"></i>REESTABLECER</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Regresar</a></p>
                </div>
            </form>
        </div>
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>