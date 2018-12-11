<?php
/* Template Name: Personalize */
get_header();
get_template_part('inc/banner');

$personalize = [
    "mesa-de-jantar" => [
        "dimensoes" => [
            "comprimento" => [
                '140cm',
                '160cm',
                '180cm',
                '200cm',
                '220cm',
                '250cm',
                '280cm',
                '300cm',
                '350cm',
                '400cm'
            ],
            "largura" => [
                '70cm',
                '80cm',
                '90cm',
                '100cm',
                '110cm',
                '120cm'
            ]
        ],
        "tampo" => [
            "tipo" => [
                "Liso" => "interico",
                "Fendas" => "fendas",
                "Orgânico" => "organico"
            ],
            "borda" => [
                "Casca para baixo" => "borda_baixo",
                "Casca para cima" => "borda_cima"
            ]
        ],
        "pes" => [
            "material" => [
                "Aço carbono" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Chapa dobrada",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto",
                    "Quadro fechado",
                    "Grampo"
                ],
                "Aço inox" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto"
                ],
                "Acrílico" => [
                    "Quadro fechado"
                ],
                "Madeira" => [
                    "Trapézio",
                    "Trapézio invertido",
                    "Quadro fechado"
                ]
            ]
        ]
    ],
    "aparador" => [
        "dimensoes" => [
            "comprimento" => [
                "1,0m",
                "1,2m",
                "1,4m",
                "1,6m",
                "1,8m",
                "2,0m"
            ],
            "largura" => [
                "0,3m",
                "0,4m",
                "0,5m"
            ]
        ],
        "tampo" => [
            "tipo" => [
                "Inteiriço" => "interico"
            ],
            "borda" => [
                "Reto + casca para cima",
                "Reto + orgânico",
                "Reto + reto"
            ]
        ],
        "pes" => [
            "material" => [
                "Aço carbono" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Chapa dobrada",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto",
                    "Quadro fechado",
                    "Grampo"
                ],
                "Aço oxidado" => [
                    "U",
                    "X",
                    "Quadro aberto"
                ],
                "Aço inox" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto"
                ],
                "Acrílico" => [
                    "Quadro fechado"
                ],
                "Madeira" => [
                    "Trapézio",
                    "Trapézio invertido",
                    "Quadro fechado"
                ]
            ]
        ]
    ],
    "banco" => [
        "dimensoes" => [
            "comprimento" => [
                "1,4m",
                "1,6m",
                "1,8m",
                "2,0m",
                "2,2m"
            ],
            "largura" => [
                "0,4m"
            ]
        ],
        "tampo" => [
            "tipo" => [
                "Inteiriço" => "interico"
            ],
            "borda" => [
                "Reto + casca para cima",
                "Reto + reto"
            ]
        ],
        "pes" => [
            "material" => [
                "Aço carbono" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Chapa dobrada",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto",
                    "Quadro fechado",
                    "Grampo"
                ],
                "Aço oxidado" => [
                    "U",
                    "X",
                    "Quadro aberto"
                ],
                "Aço inox" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto"
                ],
                "Acrílico" => [
                    "Quadro fechado"
                ],
                "Madeira" => [
                    "Trapézio",
                    "Trapézio invertido",
                    "Quadro fechado"
                ]
            ]
        ]
    ],
    "mesa-de-centro" => [
        "dimensoes" => [
            "comprimento" => [
                "0,7m",
                "1,6m",
                "2,0m"
            ],
            "largura" => [
                "0,7m"
            ]
        ],
        "tampo" => [
            "tipo" => [
                "Inteiriço" => "interico",
                "Fendas" => "fendas",
                "Orgânico" => "organico"
            ],
            "borda" => [
                "Casca para baixo" => "borda_baixo",
                "Reto"
            ]
        ],
        "pes" => [
            "material" => [
                "Aço carbono" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Chapa dobrada",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto",
                    "Quadro fechado",
                    "Grampo"
                ],
                "Aço oxidado" => [
                    "U",
                    "X",
                    "Quadro aberto"
                ],
                "Aço inox" => [
                    "U",
                    "Trapézio",
                    "Trapézio invertido",
                    "Tripé",
                    "X",
                    "L",
                    "T",
                    "Quadro aberto"
                ],
                "Acrílico" => [
                    "Quadro fechado"
                ],
                "Madeira" => [
                    "Trapézio",
                    "Trapézio invertido",
                    "Quadro fechado"
                ]
            ]
        ]
    ]
];
$tipo = (isset($_GET['tipo'])) ? $_GET['tipo'] : "mesa-de-jantar";
?>
<style>
    .active-personalize{
        background-color: #b5ada6;
    }
    li div a{
        color: #191919;
    }
    li div a:hover{
        color: #191919;
    }

    #personalize-pes-modelo-carbono, #personalize-pes-modelo-oxidado, #personalize-pes-modelo-inox, #personalize-pes-modelo-acrilico, #personalize-pes-modelo-madeira{
        display: none;
    }

    .preview {
        display: none;
    }

    .breadcrumb-container {
        margin-bottom: 15px;
    }

    #solicitar_orcamento {
        margin: 20px 0;
    }
</style>
<section id="arboreal-section2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php echo do_shortcode('[breadcrumb]'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="title-arboreal">Personalize</h1>
            </div>
        </div>
        <div class="row" style="display:none;">
            <input type="hidden" id="tipo-produto" value="<?php echo $tipo; ?>"/>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="title-arboreal-design" style="color: #191919;">Tipo <br><i style="font-size: 55px;font-family: 'Rotis SemiSerif Std';">de produto</i></h1><br>
                <p class="p-arboreal" style="color: #b5ada6;     font-size: 12px;">
                    Escolha um tipo de produto para personalizar.
                </p>
                <ul id="tipo-de-produto">
                    <?php
                    $all_categories = getAllCategories();
                    foreach ($all_categories as $i => $cat) {
                        if ($cat->slug !== 'uncategorized' && $cat->slug !== 'lareira' && $cat->slug !== 'mesa-lateral' && $cat->slug !== 'pecas-decorativas') {
                            $active = ($tipo === $cat->slug) ? "active-personalize" : "";
                            echo '<li>';
                            echo '<div class="' . $active . '"><a href="' . esc_url(get_page_link(4)) . '&tipo=' . $cat->slug . '"><img style="margin: auto" src="' . get_stylesheet_directory_uri() . '/assets/img/' . $cat->slug . '.png"><br>';
                            echo $cat->name . '</a></div>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="personalize-section2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="title-arboreal-design" style="color: #b5ada6;">Dimensões <br> <i style="font-size: 55px;color: #d7d2cb;font-family: 'Rotis SemiSerif Std';">do produto<br></i></h1><br>
                <p class="p-arboreal" style="color: #b5ada6;     font-size: 12px;">
                    Escolha o comprimento e largura que o produto deve ter<br>
                    nos seletores abaixo.
                </p>
                <select class="atributes" id="personalize-comprimento">
                    <option>Selecionar Comprimento</option>
                    <?php
                    foreach ($personalize[$tipo]["dimensoes"]["comprimento"] as $comp) {
                        echo "<option>$comp</option>";
                    }
                    ?>
                </select>
                <select class="atributes" id="personalize-largura">
                    <option>Selecionar Largura</option>
                    <?php
                    foreach ($personalize[$tipo]["dimensoes"]["largura"] as $larg) {
                        echo "<option>$larg</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
</section>
<section id="personalize-section3">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="title-arboreal-design" style="color: #191919;">Tipo <br> <i style="font-size: 55px;color: #191919;font-family: 'Rotis SemiSerif Std';"> de tampo</i></h1><br>
                <p class="p-arboreal" style="color: #b5ada6;     font-size: 12px;">
                    Selecione o tipo de tampo<br>
                    no seletor abaixo;
                </p>
                <select class="atributes" id="personalize-tampo-tipo">

                    <option>Selecionar Tampo</option>
                    <?php
                    foreach ($personalize[$tipo]["tampo"]["tipo"] as $tipo_tampo => $tipo_tampo_val) {
                        echo "<option value='" . $tipo_tampo_val . "'>$tipo_tampo</option>";
                    }
                    ?>
                </select>
                <select class="atributes" id="personalize-tampo-borda">
                    <option>Selecionar Borda</option>
                    <?php
                    foreach ($personalize[$tipo]["tampo"]["borda"] as $borda => $borda_val) {
                        echo "<option value='" . $borda_val . "'>$borda</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img style="margin: auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/mesa-placeholder.png' ?>">
            </div>
        </div>
    </div>
</section>
<section id="personalize-section2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img style="margin: auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/madeira-placeholder.png' ?>">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="title-arboreal-design" style="color: #b5ada6;">Material e Modelo <br> <i style="font-size: 55px;color: #d7d2cb;font-family: 'Rotis SemiSerif Std';">dos pés</i></h1><br>
                <p class="p-arboreal" style="color: #b5ada6;     font-size: 12px;">
                    Escolha o tipo de material dos pés no seletor<br>
                    abaixo e depois selecione o modelo.
                </p>
                <select class="atributes" id="personalize-pes-material">
                    <option>Selecionar Material</option>
                    <?php
                    foreach ($personalize[$tipo]["pes"]["material"] as $material => $modelo) {
                        echo "<option value='" . $material . "'>$material</option>";
                    }
                    ?>
                </select>
                <select class="atributes personalize-pes" id="personalize-pes-modelo-carbono">
                    <option>Selecionar Modelo</option>
                    <option value="u">U</option>
                    <option value="trapezio">Trapézio</option>
                    <option value="chapa-dobrada">Chapa dobrada</option>
                </select>
                <select class="atributes personalize-pes" id="personalize-pes-modelo-oxidado">
                    <option>Selecionar Modelo</option>
                    <option value="u">U</option>
                    <option value="x">X</option>
                    <option value="quadro_aberto">Quadro aberto</option>
                </select>
                <select class="atributes personalize-pes" id="personalize-pes-modelo-inox">
                    <option>Selecionar Modelo</option>
                    <option value="u">U</option>
                    <option value="trapezio">Trapézio</option>
                </select>
                <select class="atributes personalize-pes" id="personalize-pes-modelo-acrilico">
                    <option>Selecionar Modelo</option>
                    <option value="quadro_fechado">Quadro fechado</option>
                </select>
                <select class="atributes personalize-pes" id="personalize-pes-modelo-madeira">
                    <option>Selecionar Modelo</option>
                    <option value="trapezio">Trapézio</option>
                    <option value="quadro_fechado">Quadro fechado</option>
                </select>
            </div>
        </div>
    </div>
</section>
<section id="arboreal-section3" style="background-color: #fff">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h1 class="title-arboreal-design" style="color: #191919;">Preview <br> <i style="font-size: 55px;color: #191919;font-family: 'Rotis SemiSerif Std';">da peça</i></h1><br>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <p>
                        <b>Comprimento: </b><span id="comprimento_span"></span><br>
                        <b>Largura: </b><span id="largura_span"></span>
                    </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                <button style="color: #191919; margin-top: 5px;" class="btn-arboreal-light" id="gerar-preview">GERAR PREVIEW</button>
            </div>

        </div>
        <div class="row preview">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"><br>
                <img style="position: absolute;" id="tampo-preview" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/personalize/tampo-interico-borda_cima.png' ?>">
                <img id="pes-preview" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/personalize/pes-inox-u.png' ?>">
            </div>
        </div>
        <div class="row preview">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"><br>
                <button id="solicitar_orcamento" style="color: #191919" class="btn-arboreal-light">SOLICITAR ORÇAMENTO</button>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.5/dist/loadingoverlay.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery("#personalize-comprimento").change(function () {
            console.log(jQuery(this).val());
            jQuery("#comprimento_span").html(jQuery(this).val());
        });

        jQuery("#personalize-largura").change(function () {
            console.log(jQuery(this).val());
            jQuery("#largura_span").html(jQuery(this).val());
        });
    
        jQuery("#personalize-pes-material").change(function () {
            var material = jQuery(this).val();
            jQuery(".personalize-pes").hide();
            if ("Aço carbono" === material) {
                jQuery("#personalize-pes-modelo-carbono").show();
            } else if ("Aço oxidado" === material) {
                jQuery("#personalize-pes-modelo-oxidado").show();
            } else if ("Aço inox" === material) {
                jQuery("#personalize-pes-modelo-inox").show();
            } else if ("Acrílico" === material) {
                jQuery("#personalize-pes-modelo-acrilico").show();
            } else if ("Madeira" === material) {
                jQuery("#personalize-pes-modelo-madeira").show();
            } else {
                jQuery(".personalize-pes").hide();
            }
        });
        
        
    
        jQuery("#gerar-preview").click(function () {
            var dialog = bootbox.dialog({
                message: '<img style="margin:auto;" src="http://18.218.15.134/wp-content/themes/arboreal/assets/img/logo-color.gif" alt="Loading Arboreal"><p class="text-center" style="color: #191919;font-family: \'Rotis SemiSerif Std\';">Carregando...</p>',
                closeButton: false
            });
            try {
                var tipo = jQuery("#personalize-tampo-tipo").val();
                var borda = jQuery("#personalize-tampo-borda").val();
                if(tipo != 'Selecionar Tampo' && borda != 'Selecionar Borda'){
                    var tampo = "tampo-" + tipo + "-" + borda;
                    var material = jQuery("#personalize-pes-material").val();
                        if(material != 'Selecionar Material'){
                            var pes = "pes-";
                        if ("Aço carbono" === material) {
                            pes += "carbono-" + jQuery("#personalize-pes-modelo-carbono").val();
                        } else if ("Aço oxidado" === material) {
                            pes += "oxidado-" + jQuery("#personalize-pes-modelo-oxidado").val();
                        } else if ("Aço inox" === material) {
                            pes += "inox-" + jQuery("#personalize-pes-modelo-inox").val();
                        } else if ("Acrílico" === material) {
                            pes += "acrilico-" + jQuery("#personalize-pes-modelo-acrilico").val();
                        } else if ("Madeira" === material) {
                            pes += "madeira-" + jQuery("#personalize-pes-modelo-madeira").val();
                        } else {
                            jQuery(".personalize-pes").hide();
                        }   

                        jQuery("#tampo-preview").attr("src","http://18.218.15.134/wp-content/themes/arboreal/assets/img/personalize/"+tampo+".png");
                        jQuery("#pes-preview").attr("src","http://18.218.15.134/wp-content/themes/arboreal/assets/img/personalize/"+pes+".png");
                        jQuery(".preview").show();
                    } else {
                        dialog.init(function(){
                            dialog.find('.bootbox-body').html('<p class="text-center" style="color: #191919;font-family: \'Rotis SemiSerif Std\';">Selecione os pés para gerar preview !!!</p>');
                        }); 
                    }
                } else {
                    dialog.init(function(){
                        dialog.find('.bootbox-body').html('<p class="text-center" style="color: #191919;font-family: \'Rotis SemiSerif Std\';">Selecione um tampo e uma borda para gerar preview !!!</p>');
                    }); 
                }
            } catch (err) {
                dialog.init(function(){
                    dialog.find('.bootbox-body').html('<p class="text-center" style="color: #191919;font-family: \'Rotis SemiSerif Std\';">'+ err.message +'</p>');
                });
            } finally {
                setTimeout(function(){
                    bootbox.hideAll();
                }, 3000);
            }     
        });

        jQuery("#solicitar_orcamento").click( function () {
            var dialog = bootbox.dialog({
                message: '<img style="margin:auto;" src="http://18.218.15.134/wp-content/themes/arboreal/assets/img/logo-color.gif" alt="Loading Arboreal"><p class="text-center" style="color: #191919;font-family: \'Rotis SemiSerif Std\';">Enviando orçamento...</p>',
                closeButton: false
            });

            var tipo = jQuery('#tipo-produto').val();
            var comprimento = jQuery('#personalize-comprimento').val();
            var largura = jQuery('#personalize-largura').val();
            var tampo = jQuery("#personalize-tampo-tipo").val();
            var borda = jQuery("#personalize-tampo-borda").val();
            var material = jQuery('#personalize-pes-material').val();
            if ("Aço carbono" === material) {
                material = "carbono";
            } else if ("Aço oxidado" === material) {
                material = "oxidado";
            } else if ("Aço inox" === material) {
                material = "inox";
            } else if ("Acrílico" === material) {
                material = "acrilico";
            } else if ("Madeira" === material) {
                material = "madeira";
            } 
            var modelo = jQuery('#personalize-pes-modelo-' + material).val();

            var data = {
                'tipo': tipo,
                'comprimento': comprimento,
                'largura': largura,
                'tampo' : tampo,
                'borda' : borda,
                'material' : material,
                'modelo' : modelo
            };

            if(comprimento != 'Selecionar Comprimento' && largura != 'Selecionar Largura') {
                console.log(data);
            } else {
                dialog.init(function(){
                    dialog.find('.bootbox-body').html('<p class="text-center" style="color: #191919;font-family: \'Rotis SemiSerif Std\';">Selecione o comprimento e largura da peça !!!</p>');
                });
            }
            setTimeout(function(){
                bootbox.hideAll();
            }, 3000);
        });
    });
</script>
<?php get_footer(); ?>