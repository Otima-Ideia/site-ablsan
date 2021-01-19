<?php
/*
Template Name: Comercializacao-lojas
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>
    <div class="container-fluid" style="background-color: #fff;">
        <div class="container pt-5">
            <section class="row ablsan-row-infos">
                <article class="col-lg-12">
                    <div class="headline-title">
                        <hr class="red">
                        <h1 class="headline headline-ml headline-header-text-1"><?php echo the_field("titulo") ?></h1>
                    </div>
                    <p>
                        <?php echo the_field("descricao_p_1") ?>
                    </p>
                </article>
            </section>
        </div>
    </div>
    <!-- Page Content (Wordpress Content) -->
    <div class="container pb-5">
        <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
        else : ?>
            <p>Desculpa, não foi encontrado conteúdo para essa página.</p>
        <?php endif; ?>
    </div>
    <!--/Page Content (Wordpress Content) -->
    <!-- Ficha Técninca -->
    <div class="container ficha-tecnica">
        <h2>Ficha Técnica</h2>
        <div class="row">
            <div class="col ficha-tecnica-item">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_1") ?></li>
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_2") ?></li>
                </ul>
            </div>
            <div class="col ficha-tecnica-item">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_3") ?></li>
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_4") ?></li>
                </ul>
            </div>
            <div class="col ficha-tecnica-item">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_5") ?></li>
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_6") ?></li>
                </ul>
            </div>
            <div class="col ficha-tecnica-item">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_7") ?></li>
                    <li class="list-group-item"><?php echo the_field("ficha_tecnica_8") ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/Ficha Técninca -->
    <div class="container">
        <?php get_template_part('template-parts/comercializacao-slide'); ?>
    </div>
</main>
<?php get_template_part('template-parts/comercializacao-maps'); ?>
<?php get_template_part('template-parts/contato'); ?>
<?php get_footer(); ?>