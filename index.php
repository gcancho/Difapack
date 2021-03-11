<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>

    <div class="content">


        <section class="slider__wrap wrap">
            <div class="slider" id="slider">
                <div class="slider__section">
                    <img src="./imagenes/slider-1.jpg" alt="" class="slider__img" />
                </div>
                <div class="slider__section">
                    <img src="./imagenes/slider-2.jpg" alt="" class="slider__img" />
                </div>
                <div class="slider__section">
                    <img src="./imagenes/slider-3.jpg" alt="" class="slider__img" />
                </div>
                <div class="slider__section">
                    <img src="./imagenes/slider-4.jpg" alt="" class="slider__img" />
                </div>
            </div>
            <a class="slider__btn slider__btn--left" id="btn-left">
                <i class=" fa fa-caret-left slider__icono"></i>
            </a>
            <a class="slider__btn slider__btn--right" id="btn-right">
                <i class=" fa fa-caret-right slider__icono"></i>
            </a>
        </section>
        <section class="bienvenida">
            <div class="wrap wrap--largo">
                <div class="bienvenida__barra">
                    <h1 class="bienvenida__titulo">BIENVENIDOS A DIFAPACK</h1>
                </div>
            </div>
            <div class="bienvenida__informacion">
                <div class="wrap">
                    <img class="bienvenida__foto" src="./imagenes/maquinas/Maquina_llenadoras_de_botellas.jpg" alt="Maquina llenadoras de botellas" />
                    <p class="bienvenida__parrafo">Somos una empresa aplicada al diseño, fabricación y venta de maquinas
                        Dosificadoras, Llenadoras,
                        Roscadoras, Taponadoras, Enjugadoras, etc. para la industria alimentaria y afines, dedicadas a la
                        producción.</p>
                    <p class="bienvenida__parrafo">Debido a nuestros años de experiencia somos capaces de brindarle maquinas
                        que se ajusten a sus
                        necesidades de producción y al ser fabricantes directos, le ofrecemos el más alto soporte técnico y
                        la capacitación necesaria para el buen funcionamiento de las maquinas.</p>
                    <a class="bienvenida__boton boton" href="nosotros.php">LEER MÁS</a>
                </div>
            </div>
        </section>
        <section class="maquinas">
            <div class="maquinas__wrap wrap">
                <div class="line"></div>
                <h2 class="maquinas__titulo titulo">NUESTRAS MÁQUINAS</h2>
                <div class="maquinas__lista">
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Llenadoras de botellas</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquina_llenadoras_de_botellas.jpg" alt="">
                        <a href="llenadoras-botellas.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Dosificadoras con tolva</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquinas_dosificadora_con_tolva.jpg" alt="">
                        <a href="dosificadora-tolva.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Dosificadoras de miel</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquina_dosificadora_de_miel.jpg" alt="">
                        <a href="dosificadora-miel.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Dosificadoras sistema aguja</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquinas_dosificadora_sistema_aguja.jpg" alt="">
                        <a href="dosificadora-aguja.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Enjuagadoras</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquinas_enjuagadoras_de_botellas_o_potes.jpg" alt="">
                        <a href="enjuagadoras.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Roscadoras</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquinas_roscadoras.jpg" alt="">
                        <a href="roscadoras.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                    <article class="maquinas__card">
                        <label class="maquinas__nombre">Máquinas</label>
                        <label class="maquinas__nombre">Llenadoras de pintura</label>
                        <img class="maquinas__foto" src="./imagenes/maquinas/Maquinas_llenadoras_de_pintura.jpg" alt="">
                        <a href="llenadoras-pintura.php" class="maquinas__boton boton">VER MÁS</a>
                    </article>
                </div>
            </div>
        </section>
    </div>

    <?php include "includes/footer.php" ?>

    <?php include "includes/scripts.php" ?>
</body>

</html>