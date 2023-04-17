<?php
/*
Template Name: Archiv Page
*/
?>
<?php get_header(); ?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Blogg</h1>


                    <?php while (have_posts()) { ?>
                        <article>
                            <?php the_post();
                            the_post_thumbnail('large'); ?>
                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php get_template_part('/template_parts/parts', 'date'); ?>
                            <?php the_content(); ?>

                        </article>
                    <?php } ?>


                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php endif; ?>
                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i> <?php the_date(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <?php the_content(); ?>
                                </li>
                            </ul>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; ?>

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="posted-on"><?php the_time(get_option('date_format')); ?></span>
                                        <span class="byline"> by <?php the_author(); ?></span>
                                        <span class="category"><?php the_category(', '); ?></span>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>

                        <?php endwhile; ?>

                        <?php the_posts_navigation(); ?>

                    <?php else : ?>

                        <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>

                    <?php endif; ?>

                    <!-- 
                    <article>
                        <img src="img/washington.jpg" />
                        <h2 class="title">
                            <a href="inlagg.html">Det tredje inlägget</a>
                        </h2>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> 1 januari, 2016
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
                    </article>
                    <article>
                        <img src="img/paris.jpg" />
                        <h2 class="title">
                            <a href="inlagg.html">Mitt andra inlägg</a>
                        </h2>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> 1 januari, 2016
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <a href="forfattare.html">John Doe</a>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 3</a>
                            </li>
                        </ul>
                        <p>Integer quis eros at urna pulvinar mollis eget quis ex. Nam fringilla tellus at ligula consequat, sed sagittis ipsum ultricies. Nunc pretium bibendum enim id iaculis. Nam sed leo non sem aliquam imperdiet dictum vitae magna. Phasellus ac accumsan dolor, quis congue mauris. Maecenas vehicula, arcu sed congue euismod, mi urna rhoncus nunc, et feugiat arcu tellus vitae odio. Sed luctus vel lorem vel dictum. Suspendisse potenti. Proin vel efficitur ex. Suspendisse scelerisque rutrum mattis. In sed laoreet augue, non maximus ante. Nam a rhoncus ligula. Aliquam at aliquet lorem. Suspendisse non risus tincidunt, gravida augue non, fringilla libero.</p>
                    </article>
                    <article>
                        <img src="img/london.jpg" />
                        <h2 class="title">
                            <a href="inlagg.html">Hej världen!</a>
                        </h2>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> 1 januari, 2016
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>, <a href="kategori.html">Kategori 3</a>
                            </li>
                        </ul>
                        <p>Sed pretium metus in urna vehicula imperdiet. Fusce at odio vitae felis maximus tincidunt. Nunc porttitor ex a elementum dictum. Maecenas eget arcu nulla. Cras auctor dui aliquet, condimentum orci vel, venenatis nisl. Ut semper magna urna, ac congue dui cursus vitae. Nam sed pharetra leo, vel tincidunt est. Phasellus volutpat tortor nec nulla feugiat congue. Donec quis ligula varius, euismod nisl eu, aliquet metus. Aliquam tempus iaculis odio, sed volutpat mi aliquam aliquet.</p>
                    </article>
                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <a class="prev page-numbers" href="">Föregående</a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="next page-numbers" href="">Nästa</a>
                    </nav>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                            <li>
                                <form id="searchform" class="searchform">
                                    <div>
                                        <label class="screen-reader-text">Sök efter:</label>
                                        <input type="text" />
                                        <input type="submit" value="Sök" />
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul role="navigation">
                            <li class="pagenav">
                                <h2>Sidor</h2>
                                <ul>
                                    <li class="page_item current_page_item">
                                        <a href="">Blogg</a>
                                    </li>
                                    <li class="page_item">
                                        <a href="">Exempelsida</a>
                                    </li>
                                    <li class="page_item">
                                        <a href="">Kontakt</a>
                                    </li>
                                    <li class="page_item page_item_has_children">
                                        <a href="">Om mig</a>
                                        <ul class="children">
                                            <li class="page_item">
                                                <a href="">Intressen</a>
                                            </li>
                                            <li class="page_item page_item_has_children">
                                                <a href="">Portfolio</a>
                                                <ul class="children">
                                                    <li class="page_item">
                                                        <a href="">Projekt 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="page_item">
                                        <a href="">Startsida</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h2>Arkiv</h2>
                                <ul>
                                    <li>
                                        <a href="arkiv.html">oktober 2016</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="categories">
                                <h2>Kategorier</h2>
                                <ul>
                                    <li class="cat-item">
                                        <a href="">Natur</a> (1)
                                    </li>
                                    <li class="cat-item">
                                        <a href="">Okategoriserade</a> (3)
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main> -->

                    <?php get_footer(); ?>