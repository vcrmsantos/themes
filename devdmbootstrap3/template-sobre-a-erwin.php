  <style>
    .btn-sobre-a-erwin {
      display: block;
      padding: 15px;
      background-color: #c73736;
      color: white;
      border: 2px solid white;
      text-transform: uppercase;
      text-decoration: none;
      font-size: 12px;
      text-align: center;
    }

    .btn-sobre-a-erwin:hover {
      color: white;
      text-decoration: none;
      opacity: 0.8;
    }

    .sobre-a-erwin__content {
      background: #30353b;
      color: white;
    }

    .sobre-a-erwin__item {
      padding: 10px;
    }

    .sobre-a-erwin__address {
      padding: 10px;
    }

    .sobre-a-erwin__address .icon {
      display: inline-block;
      vertical-align: middle;
      color: #c73736;
      font-size: 20px;
      margin-right: 10px;
    }

    .sobre-a-erwin__address .address {
      display: inline-block;
      vertical-align: middle;
      font-size: 11px;
      font-weight: bold;
    }

    .sobre-a-erwin__text .title {
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    @media only screen and (min-width: 600px) {
      .sobre-a-erwin {
        background-image: url('wp-content/themes/devdmbootstrap3/images/Fachada.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 400px;
        width: 100%;
      }

      .sobre-a-erwin:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: -moz-linear-gradient(left, white 50%, #c73736 50%);
        background: -webkit-linear-gradient(left, white 50%, #c73736 50%);
        background: linear-gradient(to right, white 50%, #c73736 50%);
        opacity: 0.9;
      }

      .sobre-a-erwin__content {
        position: absolute;
        z-index: 2;
        height: 80%;
        width: 95%;
      }

      .btn-sobre-a-erwin {
        position: absolute;
        z-index: 1;
        right: 27%;
        bottom: 5%;
      }

      .sobre-a-erwin__item {
        padding: 30px;
      }

      .sobre-a-erwin__address .icon {
        font-size: 40px;
      }

      .sobre-a-erwin__address .address {
        font-size: 18px;
      }

      .sobre-a-erwin__text .title {
        font-size: 30px;
      }
    }
  </style>



<div class="sobre-a-erwin">
  <div class="sobre-a-erwin__content">
    <div class="row">
      <div class="col-md-6">
        <div class="sobre-a-erwin__item">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Fachada.jpg" alt="" srcset="">
          <div class="sobre-a-erwin__address">
            <div class="icon"><i class="glyphicon glyphicon-map-marker"></i></div>
            <div class="address">Rua São Benedito, 1287 - Santo Amaro - São Paulo <br> SP CEP 04735-003 (11) 5694-2222</div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="sobre-a-erwin__item">
          <div class="sobre-a-erwin__text">
            <div class="title">O imóvel ideal para você só com quem conhece de imóveis</div>
            <div class="text">A confiança que a LOPES Erwin Maack construiu com seus clientes nasceu da experiência
              adquirida por mais de 50 anos de atuação no mercado imobiliário. A empresa que se constituiu, na
              parceria entre Erwin Maack e João Nogueira, alcançou em pouco tempo um lugar de destaque na venda e
              locação de imóveis na Zona Sul de São Paulo. Esse sucesso levou, em 2011, a mais uma parceria de
              sucesso, com a união da imobiliária Erwin Maack ao Grupo Lopes, no segmento de imóveis prontos. Surgia
              então a Pronto! Erwin Maack.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="" class="btn-sobre-a-erwin">Saiba mais sobre a erwin maack</a>
</div>




  <style>
     .item-negocio {
          background-image: url('wp-content/themes/devdmbootstrap3/images/faca-o-melhor.png');
          background-repeat: no-repeat;
          height: 150px;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          background-position: center center;
      }

      .item-negocio:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #494d4e;
        opacity: 0.9;
      }

      .item-negocio--red {
        background-image: url('wp-content/themes/devdmbootstrap3/images/faca-o-melhor-2.png');
        background-size: auto;
        background-position: center right;
      }

      .item-negocio--red:before {
        background: #c73736;
      }

      .item-negocio__text {
        position: absolute;
        z-index: 2;
        text-transform: uppercase;
        text-align: center;
        margin: auto;
        top: 30%; left: 0; right: 0;
      }

      .item-negocio__text > .white {
        color: white;
        font-size: 15px;
        font-weight: bold;
      }

      .item-negocio__text > .red {
        color: #c73736;
        font-size: 35px;
        font-weight: bold;
      }

    .item-negocio__text > .number {
        color: white;
        font-size: 30px;
        font-weight: bold;
      }

      .item-negocio__text > .white-small {
        color: white;
        font-size: 15px;
        opacity: 0.7;
        text-transform: none;
        font-style: italic;
      }

      .item-negocio--red .item-negocio__text {
        transform: translateY(30%);
      }

  </style>

<section class="melhor-negocio">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5" style="padding:0;">
          <div class="item-negocio">
              <div class="item-negocio__text">
                  <div class="white">Faça o melhor</div>
                  <div class="red">Negócio</div>
              </div>
          </div>
      </div>
      <div class="col-md-7" style="padding:0;">
          <div class="item-negocio item-negocio--red">
              <div class="row">
                <div class="col-md-4">
                    <div class="item-negocio__text">
                        <div class="number">2500</div>
                        <div class="white-small">Imóveis à disposição <br> para venda e aluguel</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-negocio__text">
                        <div class="number">25</div>
                        <div class="white-small">Imóveis vendidos nos <br> últimos 15 dias</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-negocio__text">
                        <div class="number">2500</div>
                        <div class="white-small">Contratos de aluguel <br> Assinados no último mês</div>
                    </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>

</section>




<style>


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 6666;
    text-align: center;
}

.sidenav .brand {
    margin-bottom: 50px;
}

.sidenav .brand__logo {
  width: 150px;
}

.sidenav__list {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-bottom: 35px;
}

.sidenav__link {
    padding: 10px 0;
    text-decoration: none;
    font-size: 15px;
    color: #c5c9c8;
    display: block;
    transition: 0.3s;
    text-transform: uppercase;
}

.sidenav__link:hover {
    color: #f1f1f1;
    text-decoration: none;
}

.sidenav .closebtn {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 30px;
    margin-left: 50px;
    color: #c5c9c8;
    cursor:pointer;
}

.sidenav--active {
  position: relative;
  margin-left: 350px;
}

.sidenav--active .sidenav {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  .sidenav--active .sidenav {
    width: 350px;
  }
}

.sidenav--active:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: white;
        opacity: 0.7;
        z-index: 5555;
}

.sidenav .social-icons a {
    color: white;
    margin-right: 15px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<nav id="sidenav-vanilla" class="sidenav">
  <span href="javascript:void(0)" id="close-sidenav" class="closebtn">&times;</span>
  <div class="brand">
    <img class="brand__logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-erwin-light.png" alt="Erwin Maack">
  </div>
  <ul class="sidenav__list">
  <?php
    $menu_name = 'main_menu';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

    foreach( $menuitems as $item ) {
      // set up title and url
      $title = $item->title;
      $link = $item->url;
      echo '<li class="sidenav__item">';
        echo '<a class="sidenav__link" href="' .$link. '" title="' .$title. '">' .$title. '</a>';
      echo '</li>';
    }
?>
</ul>
  <div class="social-icons">
    <a href="http://www.facebook.com/lopeserwinmaack" title="Conheça o nosso facebook!" target="_facebook">
      <i class="fa fa-facebook fa-icon-special" aria-hidden="true">&nbsp;</i>
    </a>
    <a href="https://plus.google.com/108439445162457545114" title="Conheça o nosso Google Plus!" target="_gplus">
      <i class="fa fa-google-plus fa-icon-special" aria-hidden="true">&nbsp;</i>
    </a>
    <a href="https://twitter.com/lopeserwinmaack" title="Conheça o nosso twitter!" target="_twitter">
      <i class="fa fa-twitter fa-icon-special" aria-hidden="true">&nbsp;</i>
    </a>
    <a href="https://www.instagram.com/lopeserwinmaack" title="Conheça o nosso instagram!" target="_instagram">
      <i class="fa fa-instagram fa-icon-special" aria-hidden="true">&nbsp;</i>
    </a>
  </div>

</nav>

<script>
var body = document.querySelector("body");
var nav = document.querySelector("nav.navbar");
var content = document.querySelector(".content");

document.getElementById("open-sidenav").onclick = function() {openNav()};
document.getElementById("close-sidenav").onclick = function() {closeNav()};

function openNav() {
    body.classList.add("sidenav--active");
    nav.classList.remove("navbar-fixed-top");
    content.classList.remove("dmbs-content");
}

function closeNav() {
    body.classList.remove("sidenav--active");
    nav.classList.add("navbar-fixed-top");
    content.classList.add("dmbs-content");
}
</script>