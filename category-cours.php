<?php get_header(); ?>

<section class="site__main">
    <h1>Liste de cours</h1>
                <article class="grille__cours">
                <input type="radio" name="modal" id="fermer">
                    <?php
                    if (have_posts()):
                        while(have_posts()) : the_post();
                        $title = get_the_title(); ?>
                            
                            <div>

                                <h2><?php echo substr($title, strpos($title, '-') + 1); ?></h2>

                                <p>
                                    <?php 
                                    echo wp_trim_words(get_the_content(), 20, '...<label class="button" for="modal' . get_the_id() . '">'
                                    .substr(get_the_title(), 0, 8)
                                    ."</label>");
                                    ?>

                                </p>

                                <input type="radio" name="modal" class="modal__checkbox" id="modal<?= get_the_id(); ?>">
                                <article class="modal__article">
                                    <label for="fermer" class="modal__fermer"></label>
                                    <div>
                                        <?= get_the_content() ?>
                                    </div>
                                </article>

                                <footer>
                                    departement
                                </footer>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>  
            </article>
</section>

<?php get_footer(); ?>