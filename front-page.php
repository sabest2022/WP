<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="text">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>