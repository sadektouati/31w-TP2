<?php get_header(); ?>

<section class="site__main">
    <h1>Un model Wordpress, pour article a lire</h1>
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>

    <p>
        <?= wp_trim_words(get_the_content(), 20, "...<a href='"
        .get_the_permalink()
        ."' class=button>"
        .substr(get_the_title(), 0, 8)
        ."</a>") ?>
    </p>

        <?php endwhile; ?>
    <?php endif; ?>    
</section>

<?php get_footer(); ?>