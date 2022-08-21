<?php get_header(); ?>

<section class="site__main">
    <h1>Liste de cours</h1>
                <article class="grille__cours">
                <input type="radio" name="modal" id="fermer">
                    <?php
                    if (have_posts()):
                        while(have_posts()) : the_post();
                        get_template_part('content', 'cours');
                        endwhile; ?>
                    <?php endif; ?>  
            </article>
</section>

<?php get_footer(); ?>