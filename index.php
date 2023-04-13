<?php get_header(); ?>

<body>
    <?php
    while (have_posts()) {
        the_post(); ?>
        <h1>
            <?php the_title();
            the_content(); ?>
        </h1>
    <?php
    } ?>


</body>
<?php get_footer(); ?>