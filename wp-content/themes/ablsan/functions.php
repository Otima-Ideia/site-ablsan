<?php
function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url('https://www.otimaideia.com.br/wp-content/uploads/2020/05/logo.png');
            background-size: auto;
            width: auto;
            height: 70px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

function theme_css()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap-stuffs', get_template_directory_uri() . '/assets/css/bootstrap-stuffs.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', '', false, 'screen');
    wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . '/assets/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'theme_css');
