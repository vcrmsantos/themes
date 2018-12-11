<?php
/* Template Name: Apoio ao Cliente */
get_header();
get_template_part('inc/banner');

$image_dir = get_stylesheet_directory_uri() . '/assets/img/';
?>

<section>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php
                    echo do_shortcode('[breadcrumb]');
                    ?>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="title-arboreal">
                    <?php the_title(); ?>
                </h1>
                <ul id="nav-apoio" class="nav nav-tabs">
                    <li class="nav-tabs__item active">
                        <a data-toggle="tab" href="#sugestao">
                            <img src="<?php echo $image_dir; ?>sugestao.png" alt="" srcset="">
                            <div class="text">Carta de sugestões</div>
                        </a>
                    </li>
                    <li class="nav-tabs__item">
                        <a data-toggle="tab" href="#mensagem">
                            <img src="<?php echo $image_dir; ?>msg.png" alt="" srcset="">
                            <div class="text">Envie nos uma mensagem</div>
                        </a>
                    </li>
                    <li class="nav-tabs__item">
                        <a data-toggle="tab" href="#troca">
                            <img src="<?php echo $image_dir; ?>troca.png" alt="" srcset="">
                            <div class="text">Trocas e devoluções</div>
                        </a>
                    </li>
                    <li class="nav-tabs__item">
                        <a data-toggle="tab" href="#montagem">
                            <img src="<?php echo $image_dir; ?>montagem.png" alt="" srcset="">
                            <div class="text">entrega e montagem</div>
                        </a>
                    </li>
                </ul>

                <div class="tab-content tab-apoio">
                    <div id="sugestao" class="tab-pane fade in active show">
                        <h3>Sua sugestão é bem vindo</h3>
                        <div class="contato">
                            <div class="col">
                                <?php echo do_shortcode('[contact-form-7 id="10" title="Formulário de contato 1"]'); ?>
                            </div>
                            <div class="col">
                                LIGUE PARA A ARBOREAL
                                <br> (19) 3935-8606
                                <br> ENVIE-NOS UM E-MAIL
                                <br> contato@arboreal.com.br
                            </div>
                        </div>
                    </div>
                    <div id="mensagem" class="tab-pane fade">
                    <h3>Envie nos uma mensagem</h3>
                        <div class="contato">
                            <div class="col">
                                <?php echo do_shortcode('[contact-form-7 id="10" title="Formulário de contato 1"]'); ?>
                            </div>
                            <div class="col">
                                LIGUE PARA A ARBOREAL
                                <br> (19) 3935-8606
                                <br> ENVIE-NOS UM E-MAIL
                                <br> contato@arboreal.com.br
                            </div>
                        </div>
                    </div>
                    <div id="troca" class="tab-pane fade">
                        <h3>TROCAS E DEVOLUÇÕES</h3>
                        <div class="content">
                            <h4>Cancelamento de compras</h4>
                            <p>Cancelamentos de compras são aceitos nas seguintes situações: 1) Para as compras realizadas pelo Site e Televendas De
                                acordo com o artigo 49 do Código de Defesa do Consumido, no caso de compras realizadas fora do estabelecimento...
                                </p>

                            <h4>Troca e devolução de compras realizadas pelo Site e Televendas</h4>
                            <p>Compras feitas pelo site ou televendas poderão ser trocadas através da retirada pela Tok&Stok no local de entrega ou
                                poderão também serem trocadas nas lojas físicas Tok&Stok, exceto na Loja de Saldos. Até 7 dias após o... </p>

                            <h4>Troca por divergência de informações </h4>
                            <p>A Tok&Stok se empenha em fornecer o máximo de informações sobre seus produtos, disponibilizando diversos recursos, tais
                                como catálogos, site, etiquetas na loja, indicação de matérias-primas, medidas, indicações de uso, etc... </p>

                            <h4>Troca por defeito de fabricação</h4>
                            <p>Pode ser solicitada troca sempre que for constatado um defeito de fabricação, quando o produto estiver dentro do prazo
                                de garantia e de acordo com as condições abaixo: a) com apresentação do documento fiscal de compra,. b) de... </p>

                            <h4>Divergência entre a mercadoria que foi comprada e a recebida</h4>
                            <p>Na hipótese de ser constatada alguma divergência entre a mercadoria que foi comprada e a recebida, o cliente, já no momento
                                da entrega, deverá recusar a entrega e informar imediatamente a nossa Central de Atendimento para... </p>
                        </div>
                    </div>
                    <div id="montagem" class="tab-pane fade">
                        <h3>Entrega e montagem</h3>
                        <div class="content">
                            <h4>Cancelamento de compras</h4>
                            <p>Cancelamentos de compras são aceitos nas seguintes situações: 1) Para as compras realizadas pelo Site e Televendas De
                                acordo com o artigo 49 do Código de Defesa do Consumido, no caso de compras realizadas fora do estabelecimento...
                                </p>

                            <h4>Troca e devolução de compras realizadas pelo Site e Televendas</h4>
                            <p>Compras feitas pelo site ou televendas poderão ser trocadas através da retirada pela Tok&Stok no local de entrega ou
                                poderão também serem trocadas nas lojas físicas Tok&Stok, exceto na Loja de Saldos. Até 7 dias após o... </p>

                            <h4>Troca por divergência de informações </h4>
                            <p>A Tok&Stok se empenha em fornecer o máximo de informações sobre seus produtos, disponibilizando diversos recursos, tais
                                como catálogos, site, etiquetas na loja, indicação de matérias-primas, medidas, indicações de uso, etc... </p>

                            <h4>Troca por defeito de fabricação</h4>
                            <p>Pode ser solicitada troca sempre que for constatado um defeito de fabricação, quando o produto estiver dentro do prazo
                                de garantia e de acordo com as condições abaixo: a) com apresentação do documento fiscal de compra,. b) de... </p>

                            <h4>Divergência entre a mercadoria que foi comprada e a recebida</h4>
                            <p>Na hipótese de ser constatada alguma divergência entre a mercadoria que foi comprada e a recebida, o cliente, já no momento
                                da entrega, deverá recusar a entrega e informar imediatamente a nossa Central de Atendimento para... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>
    <?php get_footer(); ?>

<script>
jQuery(".nav-tabs__item").click(function() {
  jQuery(".nav-tabs__item").removeClass('active');
  jQuery(this).addClass('active');
});
</script>