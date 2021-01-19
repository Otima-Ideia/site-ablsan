<?php
/*
Template Name: Sobre
Template Post Type: page
*/
?>
<?php get_header(); ?>
<style>
    #carouselEquipe {
        min-height: 400px;
    }

    #carouselEquipe .carousel-inner,
    #carouselEquipe .carousel,
    #carouselEquipe .carousel-item,
    /*#carouselEquipe .container,*/
    #carouselEquipe .fill {
        height: 100%;
        min-height: 400px;
        width: 100%;
        background-position: center center;
        background-size: cover;
        padding-top: 1.5rem;
    }

    .slide-wrapper {
        display: inline;
    }

    .slide-wrapper .container {
        padding: 0;
    }


    /*------------------------------ vertical bootstrap slider----------------------------*/

    .vertical-carousel.carousel-inner>.carousel-item.carousel-item-next,
    .vertical-carousel.carousel-inner>.carousel-item.active.carousel-item-right {
        transform: translate3d(0, 100%, 0);
        -webkit-transform: translate3d(0, 100%, 0);
        -ms-transform: translate3d(0, 100%, 0);
        -moz-transform: translate3d(0, 100%, 0);
        -o-transform: translate3d(0, 100%, 0);
        top: 0;

    }

    .vertical-carousel.carousel-inner>.carousel-item.carousel-item-prev,
    .vertical-carousel.carousel-inner>.carousel-item.active.carousel-item-left {
        transform: translate3d(0, -100%, 0);
        -webkit-transform: translate3d(0, -100%, 0);
        -moz-transform: translate3d(0, -100%, 0);
        -ms-transform: translate3d(0, -100%, 0);
        -o-transform: translate3d(0, -100%, 0);
        top: 0;

    }

    .vertical-carousel.carousel-inner>.carousel-item.next.carousel-item-left,
    .vertical-carousel.carousel-inner>.carousel-item.carousel-item-prev.carousel-item-right,
    .vertical-carousel.carousel-inner>.carousel-item.active {
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        ;
        -moz-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        top: 0;

    }

    /*------------------------------- vertical carousel indicators ------------------------------*/
    .carousel-vertical-indicator.carousel-indicators {
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 20px;
        right: 10px;
        left: auto;
        width: auto;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .carousel-vertical-indicator.carousel-indicators li {
        display: block;
        margin-bottom: 5px;
        border: 1px solid #00a199;

    }

    .carousel-vertical-indicator.carousel-indicators li.active {
        margin-bottom: 5px;
        background: #00a199;

    }

    .list-group-item {
        border: none;
    }
</style>
<section class="banner-comercializacao" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/banner-comercializacao.png');">
    <span style="text-align: center;">PLANEJAMENTO, COMERCIALIZAÇÃO, ADMINISTRAÇÃO<br>E PARTICIPAÇÃO EM SHOPPING CENTERS</span>
</section>
<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <section class="row ablsan-row-infos">
            <article class="col-lg-12">
                <div class="headline-title">
                    <hr class="red">
                    <h1 class="headline headline-ml headline-header-text-1">HISTÓRICO DA EMPRESA ABLSAN</h1>
                </div>
                <p>
                    A ABLSAN, empresa de consultoria, planejamento, comercialização e administração de centros comerciais, shopping centers e outlets, nasce da necessidade de aproximação das técnicas de varejo com as técnicas em Real Estate, criando assim equipamentos de renda recorrente.
                </p>
                <p>
                    Os irmãos Marcelo Shioda, Marcio Shioda e Maurício Shioda, oriundos do varejo e focados na criação de cenários favoráveis para o melhor desempenho de vendas, se reúnem para formar a ABLSAN e juntar empreendedores e varejistas na criação de empreendimentos de sucesso.
                </p>
                <p>
                    Abertura de novos caminhos e novas possibilidades, mudanças de rumo e ampliação de performance: estes são os objetivos da ABLSAN.
                </p>
            </article>
        </section>
    </div>
</div>
<div class="container-fluid" style="background: #ebebeb; position: relative;">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/line-detail.png" style="object-fit: cover; position: absolute; top: 0; left: 0;">
    <div class="container">
        <div class="row" style="height: 316px;align-items: center;">
            <p>
                A ABLSAN possui um time comercial formado por profissionais com vasta experiência no mercado, bem como com conhecimento da estratégia comercial das principais marcas em nível nacional. O seu time técnico, por outro lado, inclui arquitetos, engenheiros, administradores, economistas, advogados e técnicos, além de uma ampla gama de recursos para representar aos clientes e proprietários do negócio, otimizando desempenho e resultados.
            </p>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #CCCCCC; margin-bottom: 10rem;">
    <section style="display: flex; justify-content: center;">
        <article style="background-image: url('https://homologacao.ablsandigital.com.br/wp-content/themes/ablsan/assets/img/Imagem1-3.png'); background-size: cover;" class="row unitah-infos sobre">
            <div class="col col-lg-4 col-md-4">
                <p class="unitah-item-info-sobre" style="font-size: 4.5rem;">30<br><span style="font-size: .75rem;">Shopping Centers</span></p>
                <p class="unitah-item-info-sobre" style="font-size: 4.5rem;">06<br><span style="font-size: .75rem;">Outlets</span></p>
            </div>
            <div class="col col-lg-4 col-md-4">
                <p class="unitah-item-info-sobre" style="font-size: 4.5rem;">60<br><span style="font-size: .75rem;">Strip Centers</span></p>
                <p class="unitah-item-info-sobre" style="font-size: 4.5rem;">02<br><span style="font-size: .75rem;">Aeroportos</span></p>
            </div>
            <div class="col col-lg-4 col-md-4">
                <p class="unitah-item-info-sobre" style="font-size: 4.5rem;">36<br><span style="font-size: .75rem;">Market Malls</span></p>
                <p class="unitah-item-info-sobre" style="font-size: 4.5rem;">01<br><span style="font-size: .75rem;">Estação de Metrô</span></p>
            </div>

        </article>
    </section>
</div>
<div class="container-fluid" style="position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline-title">
                    <hr class="red" style="min-width: 100%;">
                    <h1 class="headline headline-ml headline-header-text-1">EQUIPE</h1>
                </div>
                    <h2 class="headline headline-ml headline-header-text-1 mx-auto" style="width: 80%;text-align: center;">A EMPRESA ABLSAN É FEITA POR GENTE, E POR ISSO<br> APRESENTAMOS A NOSSA EQUIPE QUE FAZ TODA A DIFERENÇA.
                    </h2>
                <div class="row">
                    <div class="col-lg-4" style="display: flex;align-items: center;">
                        <div id="carouselEquipe" class="carousel slide" data-pause="hover" style="height: 50%;position: relative; width: 100%;">
                            <a href="#carouselEquipe" role="button" data-slide="prev" style="position: absolute;left: 45%;transform: rotate(90deg); z-index: 1000;">
                                <img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-left.svg" alt="" srcset="">
                            </a>
                            <a class="ml-auto" href="#carouselEquipe" role="button" data-slide="next" style="position: absolute;left: 45%; bottom: 0;transform: rotate(90deg); z-index: 1000;">
                                <img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right.svg" alt="" srcset="">
                            </a>
                            <div class="carousel-inner vertical-carousel">
                                <div class="carousel-item active">
                                    <div class="list-group team-name" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-perfil-list" data-toggle="list" href="#list-perfil" role="tab" aria-controls="home"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mauricio-shioda.png" class="d-block" style="width: 82px;" alt="...">MAURICIO SHIODA</a>
                                        <a class="list-group-item list-group-item-action" id="list-perfil-2-list" data-toggle="list" href="#list-perfil-2" role="tab" aria-controls="profile"><img src="<?php echo get_template_directory_uri() ?>/assets/img/marcelo-shioda.png" class="d-block" style="width: 82px;" alt="...">MARCELO SHIODA</a>
                                        <a class="list-group-item list-group-item-action" id="list-perfil-3-list" data-toggle="list" href="#list-perfil-3" role="tab" aria-controls="messages"><img src="<?php echo get_template_directory_uri() ?>/assets/img/marcio-shioda.png" class="d-block" style="width: 82px;" alt="...">MARCIO SHIODA</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content team-content-size" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-perfil" role="tabpanel" aria-labelledby="list-perfil-list">
                                <img class="mx-auto mb-4" src="<?php echo get_template_directory_uri() ?>/assets/img/mauricio-shioda.png" class="d-block" style="width: 152px; display: block;" alt="...">
                                <p>Marcelo Shioda é brasileiro, com formação em marketing, Técnico em transações imobiliárias, empresário, atua desde 1989 no mercado de Shopping Centers, inicialmente como lojista, onde atuou com lojas próprias em Shoppings como: Poli shopping, Ibirapuera, Aricanduva, Jardim Sul, West Plaza, Center Norte, Iguatemi, Oscar Freire, Guarujá, entre outros.</p>
                                <p>Migrou para comercialização de lojas em Shopping em 2004, no equipamento denominado Shopping Bonsucesso, onde fundou com os irmãos a empresa ABLSAN. </p>

                                <p>Grupos e Shoppings Centers</p>

                                <p>Atuação em mais de 140 equipamentos de Shoppings, entre eles: Shopping Bonsucesso, Golden Square Shopping, Raposo Shopping, Espaço Empresarial Vira Copos, Infraero, Shopping Várzea Paulista, Plaza Mooca Shopping, Parque Mall Indaiatuba, Porto Muller Boulevard, Bossa Nova Mall, Mais Shopping Largo 13, Shopping Valinhos, Shopping Hortolândia, Shopping Bay Market, Buriti Shopping Mogi Guaçu, Plaza D’oro Shopping, Oreon Goiânia, Oreon Gama, Taboão Plaza Outlet, Shopping Ipiranga, Plaza Shopping Jacareí, Shopping Carapicuíba, Rossi Mall Porto Alegre, Rossi Mall Curitiba, 26 malls Best Center, 18 malls REP, Itapevi Center, Ita Shopping, Ita Shopping Vila Nova, Power Center Cica, Shopping Center Lapa, Eco Valle Lorena, Alameda Shopping, Shopping Continental, Grupo Socicam (com 33 terminais rodoviários, 70 terminais urbanos e 10 aeroportos), Grupo LPBens (Marabraz – 6 Shoppings), Grupo UAI (8 equipamentos urbanos), Pátio Metrô São Bento, etc.</p>

                                <p>A partir de 2013 atua como planejador, desenvolvedor e administração e Shopping Centers, e Outlet Center, Power Center, Strip Malls, Festival Center, e Centros Comerciais diversos como Ceasas (Ceag) e mercados.</p>
                            </div>
                            <div class="tab-pane fade" id="list-perfil-2" role="tabpanel" aria-labelledby="list-perfil-2-list">
                                <img class="mx-auto mb-4" src="<?php echo get_template_directory_uri() ?>/assets/img/marcelo-shioda.png" class="d-block" style="width: 152px; display: block;" alt="...">
                                <p>Marcelo Shioda é brasileiro, com formação em marketing, Técnico em transações imobiliárias, empresário, atua desde 1989 no mercado de Shopping Centers, inicialmente como lojista, onde atuou com lojas próprias em Shoppings como: Poli shopping, Ibirapuera, Aricanduva, Jardim Sul, West Plaza, Center Norte, Iguatemi, Oscar Freire, Guarujá, entre outros.</p>
                                <p>Migrou para comercialização de lojas em Shopping em 2004, no equipamento denominado Shopping Bonsucesso, onde fundou com os irmãos a empresa ABLSAN. </p>

                                <p>Grupos e Shoppings Centers</p>

                                <p>Atuação em mais de 140 equipamentos de Shoppings, entre eles: Shopping Bonsucesso, Golden Square Shopping, Raposo Shopping, Espaço Empresarial Vira Copos, Infraero, Shopping Várzea Paulista, Plaza Mooca Shopping, Parque Mall Indaiatuba, Porto Muller Boulevard, Bossa Nova Mall, Mais Shopping Largo 13, Shopping Valinhos, Shopping Hortolândia, Shopping Bay Market, Buriti Shopping Mogi Guaçu, Plaza D’oro Shopping, Oreon Goiânia, Oreon Gama, Taboão Plaza Outlet, Shopping Ipiranga, Plaza Shopping Jacareí, Shopping Carapicuíba, Rossi Mall Porto Alegre, Rossi Mall Curitiba, 26 malls Best Center, 18 malls REP, Itapevi Center, Ita Shopping, Ita Shopping Vila Nova, Power Center Cica, Shopping Center Lapa, Eco Valle Lorena, Alameda Shopping, Shopping Continental, Grupo Socicam (com 33 terminais rodoviários, 70 terminais urbanos e 10 aeroportos), Grupo LPBens (Marabraz – 6 Shoppings), Grupo UAI (8 equipamentos urbanos), Pátio Metrô São Bento, etc.</p>

                                <p>A partir de 2013 atua como planejador, desenvolvedor e administração e Shopping Centers, e Outlet Center, Power Center, Strip Malls, Festival Center, e Centros Comerciais diversos como Ceasas (Ceag) e mercados.</p>
                            </div>
                            <div class="tab-pane fade" id="list-perfil-3" role="tabpanel" aria-labelledby="list-perfil-3-list">
                                <img class="mx-auto mb-4" src="<?php echo get_template_directory_uri() ?>/assets/img/marcio-shioda.png" class="d-block" style="width: 152px; display: block;" alt="...">
                                <p>Marcelo Shioda é brasileiro, com formação em marketing, Técnico em transações imobiliárias, empresário, atua desde 1989 no mercado de Shopping Centers, inicialmente como lojista, onde atuou com lojas próprias em Shoppings como: Poli shopping, Ibirapuera, Aricanduva, Jardim Sul, West Plaza, Center Norte, Iguatemi, Oscar Freire, Guarujá, entre outros.</p>
                                <p>Migrou para comercialização de lojas em Shopping em 2004, no equipamento denominado Shopping Bonsucesso, onde fundou com os irmãos a empresa ABLSAN. </p>

                                <p>Grupos e Shoppings Centers</p>

                                <p>Atuação em mais de 140 equipamentos de Shoppings, entre eles: Shopping Bonsucesso, Golden Square Shopping, Raposo Shopping, Espaço Empresarial Vira Copos, Infraero, Shopping Várzea Paulista, Plaza Mooca Shopping, Parque Mall Indaiatuba, Porto Muller Boulevard, Bossa Nova Mall, Mais Shopping Largo 13, Shopping Valinhos, Shopping Hortolândia, Shopping Bay Market, Buriti Shopping Mogi Guaçu, Plaza D’oro Shopping, Oreon Goiânia, Oreon Gama, Taboão Plaza Outlet, Shopping Ipiranga, Plaza Shopping Jacareí, Shopping Carapicuíba, Rossi Mall Porto Alegre, Rossi Mall Curitiba, 26 malls Best Center, 18 malls REP, Itapevi Center, Ita Shopping, Ita Shopping Vila Nova, Power Center Cica, Shopping Center Lapa, Eco Valle Lorena, Alameda Shopping, Shopping Continental, Grupo Socicam (com 33 terminais rodoviários, 70 terminais urbanos e 10 aeroportos), Grupo LPBens (Marabraz – 6 Shoppings), Grupo UAI (8 equipamentos urbanos), Pátio Metrô São Bento, etc.</p>

                                <p>A partir de 2013 atua como planejador, desenvolvedor e administração e Shopping Centers, e Outlet Center, Power Center, Strip Malls, Festival Center, e Centros Comerciais diversos como Ceasas (Ceag) e mercados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/carousel-logo-empresas'); ?>

<?php get_template_part('template-parts/depoimentos'); ?>

<?php get_template_part('template-parts/noticias'); ?>
<?php get_template_part('template-parts/contato'); ?>
<?php get_footer(); ?>
<script>
    $('#carouselEquipe').carousel({
        interval: false
    });

    //scroll slides on swipe for touch enabled devices

    $("#carouselEquipe").on("touchstart", function(event) {

        var yClick = event.originalEvent.touches[0].pageY;
        $(this).one("touchmove", function(event) {

            var yMove = event.originalEvent.touches[0].pageY;
            if (Math.floor(yClick - yMove) > 1) {
                $(".carousel").carousel('next');
            } else if (Math.floor(yClick - yMove) < -1) {
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function() {
            $(this).off("touchmove");
        });
    });
</script>