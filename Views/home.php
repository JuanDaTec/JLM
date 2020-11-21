<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?= media(); ?>images/logo_alt1.png" alt="Logo" style="width: 170px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>productos">Productos <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="¿Buscas algo?">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= media(); ?>images/polo3-freepik.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4><img src="<?= media(); ?>images/logo_for_white_bg.png" alt="Logo" style="width: 170px;"></h4>
                    <p>Diseños agradables, listo para cualquier uso, en cualquier lugar</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= media(); ?>images/polo2-freepik.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4><img src="<?= media(); ?>images/logo_for_white_bg.png" alt="Logo" style="width: 170px;"></h4>
                    <p>Es facil darse cuenta de la comodidad en cada prenda</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= media(); ?>images/polo1-freepik.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4><img src="<?= media(); ?>images/logo_for_white_bg.png" alt="Logo" style="width: 170px;"></h4>
                    <p>Texturas y calidad, JLM es caracteristico en ello</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br>



    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="<?= media(); ?>images/card1_freepik.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">JLM y Las mejores texturas del mercado</h5>
                    <p class="card-text">Nuestra tienda comprende que la calidad es lo primero, manejamos las mejores telas y texturas para garantizar la calidad de nuestros productos.</p>
                    <p class="card-text"><small class="text-muted">Ultima actualizacion: 17 Noviembre 2020</small></p>
                </div>
            </div>
            <div class="card">
                <img src="<?= media(); ?>images/card2_freepik.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">El diseño es lo nuestro</h5>
                    <p class="card-text">Eligelo como quieras, nuestros diseños prediseñados ya son geniales, pero si deseas personalizarlos, este es tu lugar.</p>
                    <p class="card-text"><small class="text-muted">Ultima actualizacion: 17 Noviembre 2020</small></p>
                </div>
            </div>
            <div class="card">
                <img src="<?= media(); ?>images/card3_freepik.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">El blanco, perfecto para estampar</h5>
                        <p class="card-text">JLM destaca por calidad, es por eso que tenemos a disposicion algunas prendas blancas para estampar cualquier cosa... ¡Si! ¡Lo que sea!</p>
                    <p class="card-text"><small class="text-muted">Ultima actualizacion: 17 Noviembre 2020</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
