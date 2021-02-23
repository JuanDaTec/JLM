<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fas fa-circle-notch"></i> <?= $data['page_title'] ?></h1>
      <br>
      <p>Hola <strong><?= $_SESSION['userData']['nombres']; ?>.</strong> ¡Bienvenido a JLM WorkShop!</p>
    </div>
    <img class="form_title_bread" src="<?= media(); ?>/images/logo_alt1.png" alt="User Image">
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                  <h4>Usuarios registrados</h4>
                  <p><b>35</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small info coloured-icon"><i class="icon fas fa-tshirt fa-3x"></i>
                <div class="info">
                  <h4>Productos registrados</h4>
                  <p><b>25</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small warning coloured-icon"><i class="icon fas fa-shopping-bag fa-3x"></i>
                <div class="info">
                  <h4>Ventas realizadas</h4>
                  <p><b>10</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small danger coloured-icon"><i class="icon fas fa-box-open fa-3x"></i>
                <div class="info">
                  <h4>Pedidos pendientes</h4>
                  <p><b>5</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        /*$requestApi = CurlConnectionGet(URLPAYPAL."/v2/checkout/orders/62P02723Y4226320P","application/json",getTokenPaypal());
              dep($requestApi);
            $requestPost = CurlConnectionPost(URLPAYPAL."/v2/payments/captures/4MF2798776282754G/refund","application/json",getTokenPaypal());
            dep($requestPost);*/
        ?>
      </div>
    </div>
  </div>
</main>
<?php footerAdmin($data); ?><strong></strong>