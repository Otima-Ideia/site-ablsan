<?php
/*
Template Name: Nossos projetos
Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="banner-comercializacao" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/banner-comercializacao.png');">
    <span style="text-align: center;">PLANEJAMENTO, COMERCIALIZAÇÃO, ADMINISTRAÇÃO<br>E PARTICIPAÇÃO EM SHOPPING CENTERS</span>
</section>
<main>
    <div class="container">
        <section class="row ablsan-row-infos">
            <article class="col-lg-12" style="position: relative;">
                <div class="headline-title">
                    <hr class="red">
                    <h1 class="headline headline-ml">NOSSOS PROJETOS</h1>
                </div>
            </article>
            <div class="w-100"></div>
            <article class="col-lg">
                <p>
                    A ABLSAN já participou de diversos projetos de sucesso ao longo de sua história. A parceria entre ABLSAN, VERZASCA, PCA e MCB&P Empreendimentos trouxe ainda mais experiência e força para a realização de novos projetos.
                </p>
            </article>
        </section>
    </div>
    <div class="container-fluid" style="background-color: #ebebeb;">
        <div class="container">
            <div class="row">
                <div class="col-lg p-4">
                    <h2>Expansão Shopping Raposo</h2>
                    <p>
                        PEDÍODO DE COMERCIALIZAÇÃO: 2011/2012
                        LOJAS: 58
                        LOCAÇÕES REALIZADAS: 58
                        INAUGURAÇÃO: MAIO/2011
                    </p>
                    <p>
                        A ablsan foi contratada no começo de 2011, para reforçar a comer cialização feita pela Brookfield, e no período de 1 ano foi locada 
                        A expansão, e o detalhe é que a expansão já estava aberta antes
                        da chegada da ABLSAN e mesmo assim, o objetivo foi alcançado.
                    </p>
                    <div class="w-100"></div>
                    <div id="carouselProjetos" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner carousel-inner-projetos" style="position: relative;">
                            <a href="#carouselProjetos"  role="button" data-slide="prev">
                                <img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-left.svg" alt="" srcset="">
                            </a>
                            <a class="ml-auto" href="#carouselProjetos" role="button" data-slide="next">
                                <img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right.svg" alt="" srcset="">
                            </a>
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/raposo-shopping.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/raposo-shopping-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/raposo-shopping-3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('template-parts/contato'); ?>
<?php get_footer(); ?>