<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>
    <div class="content">
        <section class="contacto">
            <div class="contacto__wrap wrap">
                <div class="contacto__columnas">
                    <div class="contacto__contactenos">
                        <h3 class="contacto__subtitulo titulo">
                            Contáctenos
                        </h3>
                        <div class="contacto__datos">
                            <i class="fas fa-phone-alt"></i>
                            <label class="contacto__dato">2400926 / 962713776</label>
                        </div>
                        <div class="contacto__datos">
                            <i class="fas fa-envelope"></i>
                            <label class="contacto__dato">ventas@difapackperu.com</label>
                        </div>
                        <div class="contacto__datos">
                            <a href="https://www.facebook.com/DifaPack/" target="_blank">
                                <img class="footer__icono footer__icono--facebook" src="./imagenes/iconos/ic_facebook.svg" alt="">
                            </a>
                            <a href="https://www.youtube.com/user/DIFAPACK/videos" target="_blank">
                                <img class="footer__icono footer__icono--youtube" src="./imagenes/iconos/ic_youtube.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="contacto__formulario">
                        <h3 class="contacto__formulario titulo">
                            Enviar mensaje
                        </h3>
                        <input class="contacto__input" type="text" placeholder="Nombre :">
                        <input class="contacto__input" type="number" placeholder="Teléfono :">
                        <input class="contacto__input" type="text" placeholder="Email :">
                        <textarea class="contacto__textarea" placeholder="Mensaje :"></textarea>
                        <a class="contacto__boton boton">Enviar</a>
                    </div>
                </div>
                <div class="contacto__ubicacion">
                    <h3 class="contacto__subtitulo titulo">
                        Nuestra ubicación
                    </h3>
                    <div class="contacto__mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15607.418754752078!2d-77.0478387!3d-12.0535174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c5d8afbec59a991!2sDIFA%20PACK%20S.R.L.!5e0!3m2!1ses!2spe!4v1614460684015!5m2!1ses!2spe" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "includes/footer.php" ?>
    <?php include "includes/scripts.php" ?>
</body>

</html>