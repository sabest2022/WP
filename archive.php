<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>

                            <article>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" />

                                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php the_date(); ?><?php get_the_date(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a>

                                    </li>
                                </ul>
                                <p> <?php the_content(); ?></p>

                            </article>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p> Inga post hittades</p>
                    <?php endif; ?>
                    <nav class="navigation pagination">
                        <?php echo paginate_links(); ?> <!-- Fetching pagenate links if they are needed -->
                    </nav>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>