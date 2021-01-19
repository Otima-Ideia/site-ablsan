<?php
/*
Template Name: O que fazemos
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="container">
    <section class="row ablsan-row-infos">
        <article class="col-lg-12" style="position: relative;">
            <div class="headline-title">
                <hr class="red">
                <h1 class="headline headline-ml">O que fazemos</h1>
            </div>
        </article>
        <div class="w-100"></div>
        <article class="col-lg center-all">
            <figure>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shopiing-center.png" alt="" srcset="">
            </figure>
            <h2 class="text-center" style="font-size: 1.3rem;">COMERCIALIZAÇÃO DE LOJAS</h2>
            <p>
                KNOW HALL absoluto em trazer grandes lojas “âncoras”, e realizando todo o processo de prospecção, atendimento e orientação aos lojistas. Equipe de mais de 60 corretores, sistema automatizado e total controle das ações e resultados.
            </p>
        </article>
        <article class="col-lg center-all">
            <figure>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/comercializacao-de-lojas.png" alt="" srcset="">
            </figure>
            <h2 class="text-center" style="font-size: 1.3rem;">SHOPPING – PLANEJAMENTO E REALIZAÇÃO</h2>
            <p>
            O grupo Ablsan já executou diversos projetos de Shopping Center, desde sua idealização e criação, até a comercialização dos pontos comerciais. A Ablsan tem um relacionamento excelente no mercado sempre trazendo grandes lojas “âncoras”, o que auxilia em todo o processo de captação de lojistas e sucesso do empreendimento.
            </p>
        </article>
        <article class="col-lg center-all">
            <figure>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/expansao-e-revitalizacao.png" alt="" srcset="">
            </figure>
            <h2 class="text-center" style="font-size: 1.3rem;">EXPANSÃO  DE SHOPPING</h2>
            <p>
            Sabemos que a necessidade de crescimento de shoppings e empreendimentos comerciais já consolidados é inevitável e requer um cuidado especial. Possuímos toda a experiência e infra-estrutura necessárias para poder criar e executar o seu projeto de expansão.
            </p>
        </article>
    </section>
</main>

<?php get_template_part('template-parts/contato'); ?>
<?php get_footer(); ?>