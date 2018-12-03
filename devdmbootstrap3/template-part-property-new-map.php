<?php
$api_key = 'AIzaSyBwowSGI1W4cWmxoE0R-mnRjKB7XrT2gV8';


	$lat = str_replace(",",".", $result[0]['latitude']); 
	$lng = str_replace(",",".", $result[0]['longitude']); 

	switch ( $result[0]["referencia"] ) {
		case '65866':
			$lat = '';
			$lng = '';
		break;
	}
 
	
	//Arredondar a lat e longitude se for = 0 não existe e pega no google 
	if ( empty(round($lat)) && empty(round($lng)) ) {
		$location = urlencode( $result[0]["cep_id"] . '+Brasil' );
		//$url = "http://www.json-generator.com/api/json/get/bUYSIdqhIO?indent=2";
		$geo_url = "https://maps.googleapis.com/maps/api/geocode/json?address=$location&key=$api_key";
		$json_content= file_get_contents($geo_url);
		$data_location = json_decode( $json_content );

		if($data_location->status === "OK") {
			foreach ($data_location->results as $location) {
				$lat = $location->geometry->location->lat;
				$lng = $location->geometry->location->lng;
			}
		}
	}


$diretorio_img = get_template_directory_uri().'/images/icons-markers/'; 
$url_map = "https://www.google.com/maps/embed/v1/place?key=$api_key&q=$lat,$lng"; 

?>

<style>
.property-map {
	padding: 30px 0;
	background: #ddd;
}

.property-map .map {
	height: 450px; 
	margin: 0;
}

.content-map {
	position: relative;
}

#escolhaComercio {
    float: none;
    width: 100%;
    margin-top: auto;
    left: auto;
    top: auto;
    transform: none;
}

#escolhaComercio label {
    position: relative;
    float: left;
    width: 10%;
    height: auto;
    background: #fff;
    cursor: pointer;
    font-weight: normal;
    text-transform: uppercase;
    text-align: center;
	border: none; 
	margin:0;
	padding: 30px 0;
}

#escolhaComercio i {
	margin: 0;
}

#escolhaComercio span {
	font-size: 13px;
	font-weight: bold;
	margin-top: 10px;
}

</style>

<section class="property-map" id="location">
	<div class="container">
		<div class="row">
			<h2 class="new-title">Localização Aproximada</h2>
			<div class="content-map">
			<div id="map" class="map" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>"></div>
					<div id="escolhaComercio" class="hidden-xs">
						<form id="escolha" name="escolha">
							<input type="checkbox" id="gym" name="tipo" value="gym">
							<label for="gym">
								<i class="gym"></i>
								<span class="checked-span hidden-xs">Academias</span>
							</label>
							<input type="checkbox" id="bank" name="tipo" value="bank">
							<label for="bank">
								<i class="bank"></i>
								<span class="checked-span hidden-xs">Bancos</span>
							</label>
							<input type="checkbox" id="bar" name="tipo" value="bar">
							<label for="bar">
								<i class="bar"></i>
								<span class="checked-span hidden-xs">Bares</span>
							</label>
							<input type="checkbox" id="school" name="tipo" value="school">
							<label for="school">
								<i class="school"></i>
								<span class="checked-span hidden-xs">Escolas</span>
							</label>
							<input type="checkbox" id="pharmacy" name="tipo" value="pharmacy">
							<label for="pharmacy">
								<i class="pharmacy"></i>
								<span class="checked-span hidden-xs">Farmácias</span>
							</label>
							<input type="checkbox" id="hospital" name="tipo" value="hospital">
							<label for="hospital">
								<i class="hospital"></i>
								<span class="checked-span hidden-xs">Hospitais</span>
							</label>
							<input type="checkbox" id="bakery" name="tipo" value="bakery">
							<label for="bakery">
								<i class="bakery"></i>
								<span class="checked-span hidden-xs">Padarias</span>
							</label>
							<input type="checkbox" id="bus_station" name="tipo" value="bus_station">
							<label for="bus_station">
								<i class="bus_station"></i>
								<span class="checked-span hidden-xs">Ônibus</span>
							</label>
							<input type="checkbox" id="restaurant" name="tipo" value="restaurant">
							<label for="restaurant">
								<i class="restaurant"></i>
								<span class="checked-span hidden-xs">Restaurantes</span>
							</label>
							<input type="checkbox" id="grocery_or_supermarket" name="tipo" value="grocery_or_supermarket">
							<label for="grocery_or_supermarket">
								<i class="grocery_or_supermarket"></i>
								<span class="checked-span hidden-xs">Supermercados</span>
							</label>
						</form>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="single-property__actions">
				<div class="col-md-4">
					<a href="#" id="contact-form" title="Clique aqui para pedir mais informações sobre este imóvel" class="button-default btn-action">
						Solicitar mais informações
					</a>
				</div>

				<div class="col-md-4">
					<a target="_select" href="<?php echo get_permalink(62) . '?id=' . $result[0]['referencia'] ?>" data-property-id="<?= $result[0]['referencia'] ?>"
					title="Clique aqui para adicionar este imóvel à sua lista de imóveis favoritos" class="button-default btn-action btn-action--select">
					<i class="fa fa-heart-o"></i>Selecionar este imóvel
					</a>
				</div>

				<div class="col-md-4">
					<a class="button-default btn-action btn-action--share" onclick="window.open(this.href, 'fbsharer', 'width=500,height=300'); return false;" href="http://www.facebook.com/share.php?u=<?= $_SERVER["
					HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&title=
						<?= urlencode(utf8_encode($result[0]['categoria_modelo_unidade_descricao']))?>" title="Compartilhe este imóvel no
						Faceboook"><i class="fa fa-share-alt"></i>Compartilhar com amigo
					</a>
				</div>
		</div>
		</div>
	</div>
</section><!-- /.property-map -->


 <section class="fale-conosco">
    <div class="container-fluid">
        <div class="row row-no-padding">
            <div class="fale-conosco__title">Fale conosco</div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-heart"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text">Lopes</span><br>
                        <span class="text__big">Erwin Maack</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-phone"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Vendas</span><br>
                        <span class="text">(11) 5694-2222</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-comments-o"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Corretor</span><br>
                        <span class="text">Online</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-whatsapp"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Atendimento via</span><br>
                        <span class="text">WhatsApp</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Atendimento por</span><br>
                        <span class="text">E-MAIL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
	var mapData = document.getElementById('map');
	var lat = mapData.getAttribute('data-lat');
	var long = mapData.getAttribute('data-lng');
	var map;
	var lugar;
	var marcadores = [];
	var contador = 0;

	function initialize() {
		var pyrmont = new google.maps.LatLng(lat, long);
		map = new google.maps.Map(document.getElementById('map'), {
			center: pyrmont,
			zoom: 16,
			disableDefaultUI: true,
			zoomControl: true
		});

		function addMarker(location) {
			var Marcador = new google.maps.Circle({
				center: pyrmont,
				radius: 300,
				//strokeColor: "#FF0000",
				//strokeOpacity: 0.1,
				strokeWeight: 0,
				fillColor: "#AB1B01",
				fillOpacity: 0.3,
				map: map
			});
		}
		addMarker(pyrmont); // comentar esta linha para retirar circulo

		jQuery("form#escolha input").click(function () {
			lugar = jQuery(this).val();
			var request = {
				location: pyrmont,
				radius: 500,
				type: lugar == 'store' ? ['store', 'shopping'] : [lugar]
			};
			if (jQuery(this).prop("checked") == true) {
				contador++;

				function callback(results, status) {
					if (status == google.maps.places.PlacesServiceStatus.OK) {
						for (var i = 0; i < results.length; i++) {
							createMarker(results[i]);
						}
					} else {
						console.log('erro: ' + status);
					}
				}
				var service = new google.maps.places.PlacesService(map);
				service.nearbySearch(request, callback);
				marcadores[contador] = {
					ID: lugar,
					marcador: []
				};

				function createMarker(place) {
					var placeLoc = place.geometry.location;
					// if (place.icon) {

					var iconBase = 'http://erwinmaack.com.br/wp-content/themes/devdmbootstrap3/images/icons-markers/icon-' + lugar +
						'.png';
					var image = new google.maps.MarkerImage(iconBase, new google.maps.Size(71, 71),
						new google.maps.Point(0, 0), new google.maps.Point(17, 34),
						new google.maps.Size(25, 25));
					// } else var image = null;
					var marker = new google.maps.Marker({
						map: map,
						icon: image,
						//icon: image,
						//animation: google.maps.Animation.BOUNCE,
						//icon: 'gym-checked.png',
						position: place.geometry.location
					});
					marcadores[contador].marcador.push(marker);
					var content = place.name + "<br>" + place.vicinity
					var infowindow = new google.maps.InfoWindow()
					google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
						return function () {
							infowindow.setContent(content);
							infowindow.open(map, marker);
							//setTimeout(function () { infowindow.close(); }, 5000); //Fechar a infoWindows depois de 5 sec.
						};
					})(marker, content, infowindow));
				}
			} else {
				function deletarMarcadores(lugar) {
					for (var i = 1; i < marcadores.length; i++) {
						if (marcadores[i].ID == lugar) {
							for (var a = 0; a < marcadores[i].marcador.length; a++) {
								marcadores[i].marcador[a].setMap(null);
							};
						}
					};
				}
				deletarMarcadores(lugar);
			}
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key; ?>&libraries=places&callback=initialize"
 async defer></script>