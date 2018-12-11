<?php
/* Template Name: A Arboreal */
get_header();
get_template_part('inc/banner');
?>

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php echo do_shortcode('[breadcrumb]'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php get_template_part('inc/menu-inside-arboreal'); ?>
            </div>
        </div>
    </div>
</section>
<section class="sobre-a-arboreal">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php the_title( '<h1 class="title-arboreal text-capitalize text-center">', '</h1>' ); ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section class="showroom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="title-arboreal">Showroom & Vendas</h1>
                <p class="p-arboreal">
                    Nossas vendas são realizadas de três maneiras: 
                </p>
                <p class="p-arboreal">
                    <b>Internet:</b><br>
                    Venda das peças a pronta entrega; 
                </p>
                <p class="p-arboreal">
                    <b>ATELIÊ:</b><br>
                    Na cidade de Indaiatuba-SP, com peças a pronta entrega em exposição em nosso showroom;
                </p>
                <p class="p-arboreal">
                    <b>PROJETO SOB ENCOMENDA:</b><br>
                    Desenvolvemos, de acordo com o gosto do cliente, projetos exclusivos respeitando o que cada matéria-prima tem a oferecer. 
                </p>
                <p class="p-arboreal">
                    Entregamos em todo o Brasil. 
                </p>
                <div class="text-center">
                    <a class="btn-arboreal-light">SOLICITAR UM ORÇAMENTO</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="regiao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-arboreal text-center">Regiões já atendidas pela ArboREAL no Brasil</div>
                <ul>
                    <li>Todo território nacional com mais de 2500 peças;</li>
                    <li>Presença em mais de 7 países;</li>
                </ul>
                <div class="map">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1y7Or6koFlcfAg5G_ibrwjvSFNxpdych5"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>