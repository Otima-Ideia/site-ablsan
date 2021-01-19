  <!-- Google Tag Manager (noscript) -->
  <!DOCTYPE HTML>
  <html lang="pt-br">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
  </head>
  <style>
        html{
            margin-top: 0!important;
        }
	  @font-face {
		  font-family: NexaRegular;
		  src: url('<?php echo get_template_directory_uri() ?>/assets/fonts/Nexa-Font/NexaRegular.otf');
		}

		@font-face {
		  font-family: NexaBold;
		  src: url('<?php echo get_template_directory_uri() ?>/assets/fonts/Nexa-Font/NexaBold.otf');
		}
  </style>
  <body <?php body_class(); ?>>
      <?php if (is_front_page()) {
            get_template_part('template-parts/topbar');
            get_template_part('template-parts/navbar-jumbotron');
        } else {
            get_template_part('template-parts/topbar');
            get_template_part('template-parts/navbar-white');
        }?>
      <main role="main">