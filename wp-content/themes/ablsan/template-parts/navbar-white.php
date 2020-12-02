<style>
    html, body{
        background-color: #fff;
    }
    .bg-dark {
    background-color: #343a40 !important;
    }

    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
    background-color: #1d2124 !important;
    }
    .navbar-ul-detail + ul{
        background-color: var(--dark)!important;
        color: #fff!important;
    }
</style>
<nav id="navbar" class="navbar navbar-expand-lg" style="padding-top: 2.35rem;padding-bottom: 2.35rem;">
    <figure>
        <img src="<?= get_template_directory_uri() ?>/assets/img/logo-w.png" alt="Logo Ablsan" title="Logo Ablsan" />
    </figure>
    <div class="nav-ul-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="height: 58px;position: relative;">
            <img class="navbar-ul-detail" src="<?php echo get_template_directory_uri() ?>/assets/img/path-dark.svg">
            <ul class="ul-white" style="width: 100%;">
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="/sobre-nos" title="Sobre Nós">Sobre Nós</a></li>
                <li><a href="/comercializacao" title="Comercialização">Comercialização</a></li>
                <li><a href="/projetos" title="Projetos">Projetos</a></li>
                <li><a href="/noticias" title="Notícias">Notícias</a></li>
                <li><a href="/contato" title="Contato">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>