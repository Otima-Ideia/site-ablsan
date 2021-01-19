<div class="container-fluid" style="background-color: #fff;">
    <div class="container pt-5">
        <div class="row pb-4" style="position: relative;">
            <article class="col-lg" style="position: relative;">
                <div class="headline-title">
                    <hr class="red">
                    <h1 class="headline headline-ml">NOTÍCIAS</h1>
                </div>
            </article>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php $the_query = new WP_Query('posts_per_page=4'); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $exerp = get_the_excerpt();
                $post_date = get_the_date('d/m/Y');
                $post_hour = get_the_date('H:i:s');
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
                                <time class="small"><?php echo $post_date; ?> às <?php echo $post_hour ?></time>
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
</div>