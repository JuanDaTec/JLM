<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fas fa-circle-notch"></i> <?= $data['page_title'] ?></h1>
      <br> 
      <p>Hola <strong><?= $_SESSION['userData']['nombres'];?>.</strong> ¡Bienvenido a JLM WorkShop!</p>
    </div>
    <img class="form_title_bread" src="<?= media(); ?>/images/logo_alt1.png" alt="User Image">
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">Espacio de trabajo</div>
      </div>
    </div>
  </div>
</main>
<?php footerAdmin($data); ?><strong></strong>