<?php
$banner_options = get_post_meta(get_the_ID());
if ($banner_options['banner_ativo'][0]) {
    ?>
    <!--
    HOME
    1- Logotipo vai para o centro dos textos e reduz de tamanho;
    2- Tem a opção do call to action no banner, podendo usar vídeo ou imagem;
    3- Descritivo logo abaixo do banner, havendo a possibilidade usar paralax, imagem fixa ou faixa de cor única/logotipo. 
    -->
    <style>
        #banner-section{
            height: 100vh;
            background-color: #191919;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url(<?php echo wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'banner_-_imagem', true), 'full')[0]; ?>);
        }

        #down-wrap{
            background-color: #252525;
            position: absolute;
            bottom: 35px;
            left: 50%;
            transform: translate(-50%, 0);
            height: 50px;
            width: 50px;
            text-align: center;
            border-radius: 100px;
            cursor: pointer;
        }

    </style>
    <section id="banner-section">
        <b id="down-wrap">
            <i class="fas fa-angle-down" style="color: #fff; font-size: 25px; padding-top: 15px;"></i>
        </b>
    </section>
    <?php
} else {
    ?>
    <div class="header-space-clear-fix"></div>
    <?php
}
?>