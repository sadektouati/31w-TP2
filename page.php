<?php get_header() ?>
<main class="site__main">
     <h1>Département d'informatique et multimedia</h1>
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <?php the_title() ?>
     <?php the_content() ?>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>