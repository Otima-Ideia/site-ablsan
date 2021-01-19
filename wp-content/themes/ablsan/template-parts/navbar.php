<nav id="navbar" class="navbar navbar-expand-lg bg-transparent navbar-dark">
    <a href="/"><figure>
        <img src="<?= get_template_directory_uri() ?>/assets/img/logo2-white.png" alt="Logo Ablsan" title="Logo Ablsan" />
    </figure></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse" style="height: 58px;position: relative;">
        <img class="navbar-ul-detail" src="<?php echo get_template_directory_uri() ?>/assets/img/path-dark.svg">
        <ul class="navbar-nav dsk" style="width: 100%;">
            <li><a href="/" title="Home">Home</a></li>
            <li><a href="/quem-somos" title="Sobre Nós">Quem somos</a></li>
            <li class="nav-item dropdown btn-group">
                <a class="nav-link" href="/o-que-fazemos" title="O que fazemos">
                    O que fazemos
                </a>
                <a type="button" id="navbarDropdownMenuLinkFazer" role="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu dark-item">
                    <a class="dropdown-item dark-item" href="/planejamento-e-realizacao">Planejamento & Realização</a>
                    <a class="dropdown-item dark-item" href="/comercializacao">Comercialização</a>
                    <a class="dropdown-item dark-item" href="/patio-sao-bento">Pátio São Bento</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Comercialização de lojas
                </a>
                <div class="dropdown-menu dark-item">
                    <a class="dropdown-item dark-item" href="/lifecenter-estacao-sumare">Life Center Estação Sumaré</a>
                    <a class="dropdown-item dark-item" href="/mais-shopping">Mais Shoppings</a>
                    <a class="dropdown-item dark-item" href="/praca-unitah">Praça Unitah</a>
                    <a class="dropdown-item dark-item" href="/shopping-cidade-das-artes">Shopping Cidade das Artes</a>
                    <a class="dropdown-item dark-item" href="/urban-market">Urban Market</a>
                </div>
            </li>
            <!--<li class="btn-group"><a class="pr-0" href="/comercializacao" title="Comercialização">Comercialização</a>
                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" style="color: #fff;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dark-item">
                        <a class="dropdown-item dark-item" href="/lifecenter-estacao-sumare">Life Center Estação Sumaré</a>
                        <a class="dropdown-item dark-item" href="/mais-shopping">Mais Shoppings</a>
                        <a class="dropdown-item dark-item" href="/patio-sao-bento">Pátio São Bento</a>
                        <a class="dropdown-item dark-item" href="/praca-unitah">Praça Unitah</a>
                        <a class="dropdown-item dark-item" href="/shopping-cidade-das-artes">Shopping Cidade das Artes</a>
                        <a class="dropdown-item dark-item" href="/urban-market">Urban Market</a>
                    </div>
                </li>-->
            <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Comercialização de lojas
                </a>
                <div class="dropdown-menu dark-item">
                    <a class="dropdown-item dark-item" href="/lifecenter-estacao-sumare">Life Center Estação Sumaré</a>
                    <a class="dropdown-item dark-item" href="/mais-shopping">Mais Shoppings</a>
                    <a class="dropdown-item dark-item" href="/praca-unitah">Praça Unitah</a>
                    <a class="dropdown-item dark-item" href="/shopping-cidade-das-artes">Shopping Cidade das Artes</a>
                    <a class="dropdown-item dark-item" href="/urban-market">Urban Market</a>
                </div>
            </li>-->
            <li class="nav-item dropdown btn-group">
                <a class="nav-link" href="/nossos-projetos" title="Nossos Projetos">
                    Nossos Projetos
                </a>
                <a type="button" id="navbarDropdownMenuLinkFazer" role="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu dark-item">
                    <a class="dropdown-item dark-item" href="/em-realizacao">Em realização</a>
                    <a class="dropdown-item dark-item" href="/realizados">Realizados</a>
                </div>
            </li>
            <!--<li><a href="/noticias" title="Notícias">Notícias</a></li>-->
            <li><a href="/contato" title="Contato">Contato</a></li>
        </ul>
    </div>
    <!--<div class="nav-ul-container">
        
    </div>-->
</nav>