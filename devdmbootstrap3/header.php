<?php
// inicio sessão
if (session_id() == '') {
	session_start();
}

// coloco o count de propriedades
$_SESSION['selectedCount'] = (isset($_SESSION['properties'])) ? count($_SESSION['properties']) : 0;

$businessTypes = array('' => 'Tipo de negócio', 'venda' => 'Comprar', 'locacao' => 'Alugar');

$propertyTypes = array(
	'' => 'Tipo de imóvel', 'apartamentos' => 'Apartamento', 'casas' => 'Casa','casa-de-vila' => 'Casa de Vila', 'casa-terrea' => 'Casa Térrea','sobrado' => 'Sobrado',  'coberturas' => 'Cobertura',
	'condominios-fechados' => 'Casa em Condomínio', 'comercial' => 'Comercial', 'galpao' => 'Galpão', 'terrenos' => 'Terreno'
);

$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
$sql = "SELECT DISTINCT bairro FROM em_properties WHERE status = 'Ativo' AND bairro IS NOT NULL ORDER BY bairro ASC";			
$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth -> execute();
$regionsSearch = $sth->fetchAll();

function slug($str)
{
	$str = mb_strtolower(utf8_encode(trim($str)));
	$str = preg_replace(array('/(á|à|ã|â|ä)/','/(Á|À|Ã|Â|Ä)/',
								'/(é|è|ê|ë)/','/(É|È|Ê|Ë)/',
								'/(í|ì|î|ï)/','/(Í|Ì|Î|Ï)/',
								'/(ó|ò|õ|ô|ö)/','/(Ó|Ò|Õ|Ô|Ö)/',
								'/(ú|ù|û|ü)/','/(Ú|Ù|Û|Ü)/',
								'/(ç)/','/(Ç)/'), 
						array('a', 'A','e','E','i','I', 'o', 'O', 'u', 'U', 'c', 'C'), $str);
	$str = str_replace(' ', '-', $str);
	return $str;
}

$regions = array();
$regions[''] = 'Região/Bairro';

foreach ($regionsSearch as $key => $region) {
	$regions[slug($region['bairro'])] = utf8_encode($region['bairro']);
}

/*$regions = array(
	'' => 'Região/Bairro', 
	'aclimacao' => 'ACLIMAÇÃO', 'alto-da-boa-vista' => 'ALTO DA BOA VISTA', 'brooklin' => 'BROOKLIN', 'brooklin-novo' => 'BROOKLIN NOVO', 
	'brooklin-velho' => 'BROOKLIN VELHO', 'butanta' => 'BUTANTÃ', 'campo-belo' => 'CAMPO BELO', 'campo-grande' => 'CAMPO GRANDE', 
	'campo-limpo' => 'CAMPO LIMPO', 'centro' => 'CENTRO', 'chacara-flora' => 'CHÁCARA FLORA', 'chacara-monte-alegre' => 'CHÁCARA MONTE ALEGRE', 
	'chacara-santo-antonio' => 'CHÁCARA SANTO ANTÔNIO', 'granja-julieta' => 'GRANJA JULIETA', 'interlagos' => 'INTERLAGOS', 'ipiranga' => 'IPIRANGA', 
	'itaim-bibi' => 'ITAIM BIBI', 'jabaquara' => 'JABAQUARA', 'jardim-aeroporto' => 'JARDIM AEROPORTO', 'jardim-america' => 'JARDIM AMÉRICA', 
	'jardim-cordeiro' => 'JARDIM CORDEIRO', 'jardim-dos-estados' => 'JARDIM DOS ESTADOS', 'jardim-luzitania' => 'JARDIM LUZITÂNIA', 
	'jardim-marajoara' => 'JARDIM MARAJOARA', 'jardim-paulistano' => 'JARDIM PAULISTANO', 'jardim-petropolis' => 'JARDIM PETRÓPOLIS', 
	'jardim-prudencia' => 'JARDIM PRUDENCIA', 'jardins' => 'JARDINS', 'moema' => 'MOEMA', 'mooca' => 'MOOCA', 'morumbi' => 'MORUMBI', 
	'nova-peruibe' => 'NOVA PERUÍBE', 'panamby' => 'PANAMBY', 'paraiso' => 'PARAÍSO', 'pinheiros' => 'PINHEIROS', 'piqueri' => 'PIQUERI', 
	'planalto-paulista' => 'PLANALTO PAULISTA', 'rio-pequeno' => 'RIO PEQUENO', 'santana' => 'SANTANA', 'santo-amaro' => 'SANTO AMARO', 
	'saude' => 'SAÚDE', 'vila-mariana' => 'VILA MARIANA', 'vila-mascote' => 'VILA MASCOTE', 'vila-nova-conceicao' => 'VILA NOVA CONCEIÇÃO'
);*/

$regionsHome = array(
	'' => 'Região/Bairro',
	'alto-da-boa-vista' => 'ALTO DA BOA VISTA', 'jardim-marajoara' => 'JARDIM MARAJOARA', 
	'granja-julieta' => 'GRANJA JULIETA', 'interlagos' => 'INTERLAGOS', 
	'brooklin' => 'BROOKLIN', 'brooklin-novo' => 'BROOKLIN NOVO', 
	'brooklin-velho' => 'BROOKLIN VELHO', 'campo-belo' => 'CAMPO BELO', 'campo-grande' => 'CAMPO GRANDE',
	'chacara-monte-alegre' => 'CHÁCARA MONTE ALEGRE', 'chacara-flora' => 'CHÁCARA FLORA', 
	'chacara-santo-antonio' => 'CHÁCARA SANTO ANTÔNIO', 'granja-julieta' => 'GRANJA JULIETA', 
	'interlagos' => 'INTERLAGOS', 'itaim-bibi' => 'ITAIM BIBI',  'jardim-cordeiro' => 'JARDIM CORDEIRO', 
	'jardim-dos-estados' => 'JARDIM DOS ESTADOS', 'jardim-marajoara' => 'JARDIM MARAJOARA', 
	'jardim-petropolis' => 'JARDIM PETRÓPOLIS', 'jardim-prudencia' => 'JARDIM PRUDENCIA', 
	'moema' => 'MOEMA', 'morumbi' => 'MORUMBI', 'panamby' => 'PANAMBY', 'santo-amaro' => 'SANTO AMARO',
	'vila-mascote' => 'VILA MASCOTE', 'vila-nova-conceicao' => 'VILA NOVA CONCEIÇÃO'
);

$minValues = array(
	'' => 'Valor mínimo', '300000' => '300.000,00', '400000' => '400.000,00', 
	'500000' => '500.000,00', '600000' => '600.000,00', '700000' => '700.000,00', '800000' => '800.000,00', '900000' => '900.000,00', 
	'1000000' => '1.000.000,00', '1200000' => '1.200.000,00', '1400000' => '1.400.000,00', '1600000' => '1.600.000,00', '1800000' => '1.800.000,00', 
	'2000000' => '2.000.000,00', '2500000' => '2.500.000,00', '3000000' => '3.000.000,00', '3500000' => '3.500.000,00', '4000000' => '4.000.000,00', 
	'6000000' => '6.000.000,00', '8000000' => '8.000.000,00', '10000000' => '10.000.000,00',
);

$maxValues = array(
	'' => 'Valor Máximo', '300000' => '300.000,00', '400000' => '400.000,00', 
	'500000' => '500.000,00', '600000' => '600.000,00', '700000' => '700.000,00', '800000' => '800.000,00', '900000' => '900.000,00', 
	'1000000' => '1.000.000,00', '1200000' => '1.200.000,00', '1400000' => '1.400.000,00', '1600000' => '1.600.000,00', '1800000' => '1.800.000,00', 
	'2000000' => '2.000.000,00', '2500000' => '2.500.000,00', '3000000' => '3.000.000,00', '3500000' => '3.500.000,00', '4000000' => '4.000.000,00',
	'6000000' => '6.000.000,00', '8000000' => '8.000.000,00', '10000000' => '10.000.000,00', 
	'99999999999' => 'ou +', 
);

//Valores mínimo e máximo para opção de locação
$minValues2 = array(
	'' => 'Valor mínimo',  
	'3000' => '3.000,00', '4000' => '4.000,00', '5000' => '5.000,00', '10000' => '10.000,00', '15000' => '15.000,00', '20000' => '20.000,00'		
);

$maxValues2 = array(
	'' => 'Valor Máximo', '3000' => '3.000,00', '4000' => '4.000,00', '5000' => '5.000,00', '10000' => 
	'10.000,00', '15000' => '15.000,00', '20000' => '20.000,00', '30000' => '30.000,00', 
	'40000' => '40.000,00', '50000' => '50.000,00', '100000' => '100.000,00', '99999999999' => 'ou +', 	
);


$orders = array(
	'' => 'Ordenar por', 'maior-valor' => 'Maior valor', 'menor-valor' => 'Menor valor'
);

$bedrooms = $suites = $parkingSpaces = array(1, 2, 3, 4, 5, 6);
$minBedrooms = array_merge(array('' => 'Quartos Mínimo'), $bedrooms);
$maxBedrooms = array_merge(array('' => 'Quartos Máximo'), $bedrooms);

$minSuites = array_merge(array('' => 'Suítes Mínimo'), $suites);
$maxSuites = array_merge(array('' => 'Suítes Máximo'), $suites);

$minParkingSpaces = array_merge(array('' => 'Vagas Mínimo'), $parkingSpaces);
$maxParkingSpaces = array_merge(array('' => 'Vagas Máximo'), $parkingSpaces);

$searchFieldsHome = array(
	'buy[]' => array('options' => $businessTypes, 'multi' => true), 'type[]' => array('options' => $propertyTypes, 'multi' => true), 
	'region[]' => array('options' => $regions, 'multi' => true), 'value' => array('options' => $maxValues, 'multi' => false), 
	'order' => array('options' => $orders, 'multi' => false)
);

$minArea = array('' => 'Área mínima', 25, 50, 75, 100, 125, 150, 175, 200, 250, 300, 350, 500);
$maxArea = array('' => 'Área máxima', 50, 75, 100, 125, 150, 175, 200, 250, 300, 350, 500, 1000, 2000);

$searchFieldsPage = array(
	'buy' => array('options' => $businessTypes, 'multi' => false, 'sm' => 2), 
	'type[]' => array('options' => $propertyTypes, 'multi' => true, 'sm' => 2),
	'region[]' => array('options' => $regions, 'multi' => true, 'sm' => 4), 
	'minValue' => array('options' => $minValues, 'multi' => false, 'sm' => 2), 	
	'maxValue' => array('options' => $maxValues, 'multi' => false, 'sm' => 2),
	'minValue2' => array('options' => $minValues2, 'multi' => false, 'sm' => 2), 	
	'maxValue2' => array('options' => $maxValues2, 'multi' => false, 'sm' => 2),
	'minBedrooms' =>  array('options' => $minBedrooms, 'multi' => false, 'sm' => 2), 
	'maxBedrooms' =>  array('options' => $maxBedrooms, 'multi' => false, 'sm' => 2),
	'order' => array('options' => $orders, 'multi' => false, 'sm' => 4),    	
	'minSuites' =>  array('options' => $minSuites, 'multi' => false, 'sm' => 2), 
	'maxSuites' =>  array('options' => $maxSuites, 'multi' => false, 'sm' => 2),
	'minParkingSpaces' =>  array('options' => $minParkingSpaces, 'multi' => false, 'sm' => 2),
	'maxParkingSpaces' =>  array('options' => $maxParkingSpaces, 'multi' => false, 'sm' => 2),
	'minArea' =>  array('options' => $minArea, 'multi' => false, 'sm' => 2), 
	'maxArea' =>  array('options' => $maxArea, 'multi' => false, 'sm' => 2),
	
);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M33X5LD');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>   
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	
	<!--[if lt IE 9 &!(IEMobile)]>
        <script src="vendor/html5shiv.min.js"></script>
        <script src="vendor/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    
	<!--[if lt IE 9]>
	<script type="text/javascript">
		alert("Atualize o seu navegador ou utilize outro (Como: Chrome ou Firefox)!");
	</script>
	<![endif]-->
	
	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?4Ft62uTcmWI2aFkkTnods0o5kHmYJsjN";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->
	<style type="text/css">.zopim[__jx__id="___$_71 ___$_71"], .zopim[__jx__id="___$_61 ___$_61"] { bottom:-30px !important; }</style>
</head>
<body <?php body_class(); ?> id="<?= (isset($bodyId)) ? $bodyId : null ?>"><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M33X5LD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if(strripos($_SERVER[REQUEST_URI], 'cadastro') !== FALSE) :
echo '<!-- Google Code for Formul&aacute;rio - Cadastro de im&oacute;veis Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 852215579;
var google_conversion_label = "rBK6COX7i3cQm46vlgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/852215579/?label=rBK6COX7i3cQm46vlgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>'; 
elseif(strripos($_SERVER[REQUEST_URI], 'info') !== FALSE) : 
echo '<!-- Google Code for Formul&aacute;rio - Solicita&ccedil;&atilde;o de mais informa&ccedil;&otilde;es Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 852215579;
var google_conversion_label = "716pCJeBjHcQm46vlgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/852215579/?label=716pCJeBjHcQm46vlgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>'; 
endif;
?>