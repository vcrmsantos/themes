<?php
/* Template Name: Contato */
get_header();
get_template_part('inc/banner');
?>
<section id="cross4" class="service">
    <div class="container">
        <br><br>
        <h1 class="title-arboreal text-center"><b>Entre em contato</b></h1><br>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php echo do_shortcode('[contact-form-7 id="10" title="Formulário de contato 1"]'); ?>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="p-arboreal">
                    <b>Contato:</b><br>
                    E-mail     contato@arboreal.com.br<br>
                    Tel  (019)   3935.8606<br>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=5511941448606" target="_blank" data-content="http://api.whatsapp.com/send?1=pt_BR&amp;phone=5511941448606" data-type="external" id="comp-jdag7skvlink" class="wp2link" style="cursor: pointer; width: 26px; height: 26px; color: #191919; text-decoration: none;"> Cel  (011)   9 4144.8606 <i class="fab fa-whatsapp"></i></a><br>
                </p>

                <p class="p-arboreal">
                    <b>Horário de Funcionamento</b><br>
                    Segunda a Quinta 08h | 17h<br>
                    Sexta   08h | 16h<br>
                    Sábado  10h | 14h<br>
                </p>
                <p class="p-arboreal">
                    <b>Visite nosso Ateliê - Sob agendamento</b><br>
                    R. Crisolita, 80<br>
                    Distrito Industrial, Indaiatuba, SP, Brasil <br>
                    CEP 13347-060<br>
                </p>
            </div>
        </div>
    </div>
</section><br><br>



<!-- End of Blog & Sidebar Section -->

<div class="clearfix"></div>
<?php get_footer(); ?>
