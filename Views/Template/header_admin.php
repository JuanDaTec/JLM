<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="JLM WorkShop tienda en linea de camisetas y camisetas, peronalizables y de la mejor calidad.">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="JuanDaTec">
  <link rel="shortcut icon" href="<?= media() ?>/images/favicon.ico">
  <title><?= $data['page_tag'] ?></title>
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body class="app sidebar-mini">
  <div id="divLoadingOther">
    <div>
      <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
    </div>
  </div>
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard"><img src="<?= media(); ?>/images/logo_white_alt.png" alt="Logo" style="width: 150px;"></a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?= base_url(); ?>/usuarios/perfil"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
          <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i> Cerrar sesión</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <?php require_once("nav_admin.php"); ?>