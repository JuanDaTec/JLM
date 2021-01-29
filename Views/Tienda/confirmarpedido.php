<?php
headerTienda($data);
?>

<br><br><br>
<hr>

<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        ¡Muchas gracias por tu compra!
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        <strong>Tu pedido fue procesado con éxito.</strong>
                    </p>
                    <hr>
                    <br>
                    <p class="stext-113 cl6 p-b-26">
                        <strong>No. Orden: </strong> <?= $data['orden']; ?>
                    </p>

                    <?php
                    if (!empty($data['transaccion'])) {
                    ?>

                        <p class="stext-113 cl6 p-b-26">
                            <strong>Transaccion:</strong> &nbsp;<?= $data['transaccion']; ?>
                        </p>

                    <?php
                    }
                    ?>

                    <p class="stext-113 cl6 p-b-26">
                        <strong>
                           ⚫ En breve estaremos en contacto para coordinar la entrega. <br>
                           ⚫ Puedes ver el estado de tu pedido en la sección de pedidos de tu usuario. <br>
                           ⚫ Puedes consultar tu correo electrónico para el detalle de esta transacción.
                        </strong>
                    </p>
                    <hr>
                    <br>
                    <p class="stext-113 cl6 p-b-26">
                        <a href="<?= base_url(); ?>">Continuar en JLM WorkShop</a>
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="<?= media(); ?>/images/yeah.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
footerTienda($data);
?>