<?php if (is_page( 'praca-unitah' )){
    /* Praça Unitah */
    echo do_shortcode('[smartslider3 slider="2"]');
} else if (is_page('urban-market')){
    /* Urban Market */
    echo do_shortcode('[smartslider3 slider="3"]');
} else if (is_page('shopping-cidade-das-artes')){
    /* Shopping Cidade das Artes */
    echo do_shortcode('[smartslider3 slider="4"]');
}