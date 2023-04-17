<?php get_header(); ?>

<main>

    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php the_title('') ?></h1>
                    <?php if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>

                            <article>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" />

                                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"> <?php the_date(); ?><?php get_the_date(); ?></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"> </i><a href="<?php the_author(); ?>"><?php the_author(); ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i><a href="<?php the_permalink(); ?>"><?php the_category(", "); ?></a>
                                    </li>
                                </ul>
                                <p> <?php the_content(); ?></p>

                            </article>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p> Inga post hittades</p>
                    <?php endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>