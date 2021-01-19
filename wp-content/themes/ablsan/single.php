<?php get_header(); ?>
<?php while (have_posts()) : the_post(); 
    $post_date = get_the_date('d/m/Y');
    $post_hour = get_the_date('H:i:s');
?>
    <div class="body">
        <div class="container">
            <div class="clear"></div>
            <div class="main">
                <div class="post content">

                    <div class="post_image_grid">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="w-100"></div>
                    <time class="small">Postagem feita em: <?php echo $post_date ?> às <?php echo $post_hour ?></time>
                    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php endwhile; ?>