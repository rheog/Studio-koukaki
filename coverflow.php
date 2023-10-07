<style>
    /* Styles pour le conteneur Swiper */
    swiper-container {
        width: 100%;
        max-width: 1440px;
        height: 540px;
        margin: 0 auto;
        transform: translate3d(0px, 0px, 0px);
    }

    /* Styles pour les diapositives du carrousel */
    swiper-slide {
        background-position: center;
        background-size: cover;
        width: 500px;
        height: 500px;
    }

    /* Styles pour les images à l'intérieur des diapositives */
    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
    }

    swiper-slide span {
        font-family: Roboto Mono;
        font-size: 20px;
        font-weight: 400;
        line-height: 25px;
        letter-spacing: -0.02em;
        text-align: center;

    }
</style>
<swiper-container class="mySwiper" pagination="false" effect="coverflow" grab-cursor="true" centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false">

    <swiper-slide>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Kawaneko.png" alt="Kawaneko"><span>kawaneko</span>
    </swiper-slide>
    <swiper-slide>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Orenjiiro.png" alt="Orenjiiro"><span>Orenjiiro</span>
    </swiper-slide>
    <swiper-slide>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Pinku.png" alt="Pinku"><span>Pinku</span>
    </swiper-slide>
    <swiper-slide>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Tenshi.png" alt="Tenshi"><span>Tenshi</span>
    </swiper-slide>
    <swiper-slide>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Jaakuna.png" alt="Jaakuna"><span>Jaakuna</span>
    </swiper-slide>
</swiper-container>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>