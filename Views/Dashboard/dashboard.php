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
        <div class="tile-body">Dashboard</div>
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