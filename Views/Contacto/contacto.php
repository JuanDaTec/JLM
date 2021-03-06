<?php
headerTienda($data);
?>

<br><br><br><br>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= media(); ?>/tienda/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Contacto
    </h2>
</section>

<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form>
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Envíanos un mensaje!
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Tu dirección de correo electronico">
                        <img class="how-pos4 pointer-none" src="<?= media(); ?>/tienda/images/icons/icon-email.png" alt="ICON">
                    </div>

                    <div class="bor8 m-b-30">
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="¿En que podemos ayudarte?"></textarea>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Enviar
                    </button>
                </form>
            </div>

            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Dirección
                        </span>

                        <p class="stext-115 cl6 size-213 p-t-18">
                            Calle 143 #46-09 - Barrio Prado
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-phone-handset"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Llámanos
                        </span>

                        <p class="stext-115 cl1 size-213 p-t-18">
                            +57 (305) 797-3644
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-envelope"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Nuestro correo electrónico
                        </span>

                        <p class="stext-115 cl1 size-213 p-t-18">
                            <?= EMAIL_EMPRESA ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.171605966748!2d-74.12372940148272!3d4.592007976028944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f992928b4cee9%3A0x539f03e456727685!2sCentro%20Mayor%20Centro%20Comercial!5e0!3m2!1sen!2sco!4v1614060649101!5m2!1sen!2sco" width="1920" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe><?php
footerTienda($data);
?>