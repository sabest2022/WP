<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php while (have_posts()) { ?>
                        <article>
                            <?php the_post();
                            the_post_thumbnail('large'); ?>
                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php get_template_part('/template_parts/parts', 'date'); ?>
                            <?php the_content(); ?>

                        </article>
                    <?php } ?>
                </div>
                <aside id="secondary" class="col-xs-12" col-md-3>
                    <div id="sidebar">
                        <ul>
                            <li>
                                <form id="searchform" class="searchform">
                                    <input type="text" />
                                    <input type="submit" value="sök" />
                                </form>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>