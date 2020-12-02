<?php
/*
Template Name: Comercializacao
Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="banner-comercializacao" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/banner-comercializacao.png');">
    <span>Comercialização</span>
</section>
<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <section class="row ablsan-row-infos">
            <article class="col-lg-12">
                <hr class="red">
                <h1 class="headline headline-ml headline-header-text-1">LOGISTAS (SHOPPINGS CENTERS, RUAS E METRÔ)</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </article>
        </section>
    </div>
</div>
<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5" style="background-color: #F2F2F2;">
        <section class="row ablsan-row-infos">
            <article class="col-lg-12">
                <hr class="red">
                <h1 class="headline headline-ml headline-header-text-1 pb-4" style="background-color: #F2F2F2;">TRABALHOS REALIZADOS</h1>

                <div id="carouselTrabalhos" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="control-bar">
                            <a href="#carouselTrabalhos" role="button" data-slide="prev" style="margin-right: 1rem;">
                                <img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-left.svg" alt="" srcset="">
                            </a>
                            <a class="ml-auto" href="#carouselTrabalhos" role="button" data-slide="next">
                                <img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right.svg" alt="" srcset="">
                            </a>
                        </div>
                        <div class="carousel-item active" data-interval="99999">
                            <div style="min-height: 500px; background-color: red;">
                                <span>Shopping Centers</span>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="99999">
                            <div style="min-height: 500px; background-color: blue;">
                                <span>Teste 2</span>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="99999">
                            <div style="min-height: 500px; background-color: yellow;">
                                <span>Teste 3</span>
                            </div>
                        </div>
                    </div>
                    <!--<a class="carousel-control-prev" href="#carouselTrabalhos" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTrabalhos" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>-->
                </div>
            </article>
        </section>
    </div>
</div>