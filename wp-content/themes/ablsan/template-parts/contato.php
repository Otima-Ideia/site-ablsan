<div class="container-fluid" style="background-color: #fff;">
    <div class="container py-5">
        <div class="row pb-4" style="position: relative;">
            <article class="col-lg" style="position: relative;">
                <div class="headline-title">
                    <hr class="red">
                    <h1 class="headline headline-ml">CONTATO</h1>
                </div>
                <div class="w-100"></div>
                <h5 style="font-size: 1rem;">Deixe sua mensagem para nós, nossa equipe terá o prazer de atendê-lo em breve.</h5>
            </article>
        </div>

        <section class="row">
            <article class="col-lg-8">
                <div class="formulario-contato">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]') ?>
                </div>
            </article>
            <aside class="col-lg-4">
                <article class="col-lg" style="display: flex;flex-wrap: wrap;justify-content: center;">
                    <a href="#" class="btn btn-wpp">Atendimento via WhatsApp</a>
                    <div class="w-100"></div>
                    <ul class="list-group contato-infos">
                        <li class="list-group-item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/location.svg">
                            <span>Endereço<br>Rua Jesuíno Rabello, 489 /<br>
                                Guarulhos/SP<br>
                                CEP: 07063-150
                            </span>
                        </li>
                        <li class="list-group-item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/phone.svg">
                            <span>(11) 2451-2054</span>
                        </li>
                        <li class="list-group-item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg">
                            <span>ASSINE NOSSA NEWSLETTER</span>
                        </li>
                    </ul>
                    <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
                </article>
            </aside>
        </section>
    </div>
</div>