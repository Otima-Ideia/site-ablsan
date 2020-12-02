<?php get_header(); ?>

<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <section class="row ablsan-row-infos">
            <article class="col-lg-8">
                <hr class="red">
                <h2 class="headline headline-ml">A ABLSAN</h2>
                <p>A ABLSAN é uma empresa de atuação Full Service em empreendimentos imobiliários voltados ao varejo, fornecendo 5 campos de atuação completamente integrados através da expertise de sua equipe: planejamento, desenvolvimento, comercialização, implantação e gestão de shopping centers.</p>

                <p>Fundada em 2005 como uma empresa de comercialização de espaços em shopping centers, a ABLSAN passou rapidamente a ser reconhecida pela visão inovadora em prevenir e resolver problemas, maximizando o retorno dos empreendimentos em que atuou.</p>

                <p>A ABLSAN possui um time comercial formado por profissionais com vasta experiência no mercado, bem como com conhecimento da estratégia comercial das principais marcas em nível nacional. O seu time técnico, por outro lado, inclui arquitetos, engenheiros, administradores, economistas, advogados e técnicos, além de uma ampla gama de recursos para representar aos clientes e proprietários do negócio, otimizando desempenho e resultados.</p>
            </article>
            <aside class="col-lg-4">
                <article class="col-lg" style="position: relative;">
                    <hr class="red">
                    <h2 class="headline">MISSÃO</h2>
                    <p>Superar as expectativas das pessoas envolvidas na indústria de shopping centers, unindo varejo e Real Estate para a construção de empreendimentos sustentáveis.</p>
                </article>
                <article class="col-lg" style="position: relative;">
                    <hr class="red">
                    <h2 class="headline">VISÃO</h2>
                    <p>Ser a maior fábrica de sucessos no varejo nacional.</p>
                </article>
                <article class="col-lg" style="position: relative;">
                    <hr class="red">
                    <h2 class="headline">VALORES</h2>
                    <p>Seja ético e responsável. Construa relacionamentos sólidos e honestos. Seja criativo e inovador. Entregue sempre o melhor resultado. Aja com sabedoria e respeito. Esteja aberto a mudanças. Diga não ao desperdício (mottainai). Adote a melhoria contínua (kaizen).</p>
                </article>
            </aside>
        </section>
    </div>
</div>
<div class="container-fluid" style="background-color: #ebebeb;">
    <section style="display: flex; justify-content: center;">
        <article style="background-image: url('http://localhost/site-ablsan/wp-content/themes/ablsan . /assets/img/Imagem1-2.png'); background-size: cover;" class="row unitah-infos">
            <div class="col-lg-4">
                <p class="unitah-item-info">Mais de <span style="font-size: 2.5rem;">2000</span><br><span style="font-size: .75rem;">Lojas comercializadas</span></p><a href="" class="btn btn-enviar" style="margin-bottom: 1.75rem;/*! justify-content: center; */font-size: .85rem;">Entre em contato</a>
            </div>
            <div class="col-lg-4">
                <p class="unitah-item-info">Mais de <span style="font-size: 2.5rem;">50</span><br><span style="font-size: .75rem;">Shoppings Comercializadas</span></p><a href="" style="margin-bottom: 1.75rem;/*! justify-content: center; */font-size: .85rem;" class="btn btn-light">Entre em contato</a>
            </div>
            <div class="col-lg-4">
                <p class="unitah-item-info">Mais de <span style="font-size: 2.5rem;">30</span><br><span style="font-size: .75rem;">Shoppings em comercialização</span></p><a href="" class="btn btn-enviar" style="margin-bottom: 1.75rem;/*! justify-content: center; */font-size: .85rem;">Entre em contato</a>
            </div>
        </article>
    </section>
</div>
<div id="noticias" class="container-fluid" style="background-color: #fff;">
    <div class="container">
        <section class="row" style="position: relative;">
            <hr class="red">
            <h1 CLASS="headline pt-3 headline-ml">NOTÍCIAS</h1>
            <article>
                <div class="container">
                    <div class="row">
                        <?php $the_query = new WP_Query('posts_per_page=4'); ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                            $exerp = get_the_excerpt();
                            $post_date = get_the_date('Y-m-d H:i:s');
                            $newsExerp = strip_tags($exerp);
                            if (strlen($newsExerp) > 65) {
                                // truncate string
                                $stringCut = substr($newsExerp, 0, 65);
                                // make sure it ends in a complete word
                                $newsExerp = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                            }
                        ?>
                            <div class="col-lg-3 d-flex recent-post">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="card-body p-0 pt-3">
                                        <h3 class="h6 text-center">
                                            <?php the_title(); ?>
                                        </h3>
                                        </h3>
                                        <p class="text-card text-justify text-muted">
                                            <?php echo $newsExerp; ?>
                                            <br>
                                            <time class="small"><?php echo $post_date; ?></time>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </article>
        </section>
    </div>
</div>
<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <div class="row pb-4" style="position: relative;">
            <hr class="red">
            <h1 class="headline headline-ml">CONTATO</h1>
            <div class="w-100"></div>
            <h5 style="font-size: 1rem;">Deixe sua mensagem para nós, nossa equipe terá o prazer de atendê-lo em breve.</h5>
        </div>

        <section class="row">
            <article class="col-lg-8">
                <div style="padding-right: 4rem;padding-left: 4rem;">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]') ?>
                </div>
            </article>
            <aside class="col-lg-4">
                <article class="col-lg">
                    <a href="#" class="btn btn-wpp">Atendimento via WhatsApp</a>
                    <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
                </article>
            </aside>
        </section>
    </div>
</div>

<?php get_footer(); ?>