<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1><?php wp_title(''); ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                    <?php endwhile;
                    else : endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>