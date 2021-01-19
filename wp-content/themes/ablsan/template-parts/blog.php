<?php
/*
Template Name: Blog
Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="container">
    <article class="row">
        <?php
        $paged = get_query_var('paged');
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'paged' => $paged
        );

        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
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
                <!-- card -->
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
                <!--/card -->

        <?php
            }
            $pagination = paginate_links(array(
                'total' => $post_query->max_num_pages,
                'prev_text' => '<span>◄ Anterior</span>',
                'next_text' => '<span>Próximo ►</span>'
            ));
            echo "<nav class='col-lg-12'><ul class='pagination justify-content-center'>" . $pagination . "</ul></nav>";
            /*previous_posts_link();
			next_posts_link('Next page', $post_query->max_num_pages);*/
        }
        ?>
    </article>
</section>
<?php get_template_part('template-parts/contato'); ?>