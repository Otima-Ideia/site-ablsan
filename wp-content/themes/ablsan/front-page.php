<?php get_header(); ?>

<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <section class="row ablsan-row-infos">
            <article class="col-lg-8">
                <hr class="red">
                <h2 class="headline">A ABLSAN</h2>
                <p>A ABLSAN é uma empresa de atuação Full Service em empreendimentos imobiliários voltados ao varejo, fornecendo 5 campos de atuação completamente integrados através da expertise de sua equipe: planejamento, desenvolvimento, comercialização, implantação e gestão de shopping centers.

                    Fundada em 2005 como uma empresa de comercialização de espaços em shopping centers, a ABLSAN passou rapidamente a ser reconhecida pela visão inovadora em prevenir e resolver problemas, maximizando o retorno dos empreendimentos em que atuou.

                    A ABLSAN possui um time comercial formado por profissionais com vasta experiência no mercado, bem como com conhecimento da estratégia comercial das principais marcas em nível nacional. O seu time técnico, por outro lado, inclui arquitetos, engenheiros, administradores, economistas, advogados e técnicos, além de uma ampla gama de recursos para representar aos clientes e proprietários do negócio, otimizando desempenho e resultados.
                </p>
            </article>
            <aside class="col-lg-4">
                <article class="col-lg" style="position: relative;">
                    <hr class="red">
                    <h2 class="headline">MISSÃO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea itaque obcaecati, est dolores molestiae, ducimus sapiente molestias nemo nihil, sunt numquam optio dicta ab nesciunt quidem magnam ratione illum quos.</p>
                </article>
                <article class="col-lg" style="position: relative;">
                    <hr class="red">
                    <h2 class="headline">VISÃO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quaerat itaque amet commodi vero, distinctio maiores accusamus atque dignissimos asperiores ad laboriosam voluptate? Sint cum asperiores molestiae laudantium totam veritatis!</p>
                </article>
                <article class="col-lg" style="position: relative;">
                    <hr class="red">
                    <h2 class="headline">VALORES</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quos alias nam temporibus eaque ad tenetur, vero, esse sed ex enim dicta excepturi nemo doloribus! Vero harum iusto porro molestiae.</p>
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
<div class="container-fluid" style="background-color: #fff;">
    <div class="container">
        <section class="row">
            <h1 CLASS="pt-3">NOTÍCIAS</h1>
            <article>

            </article>
        </section>
    </div>
</div>
<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <div class="row pb-4">
            <h1>CONTATO</h1>
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