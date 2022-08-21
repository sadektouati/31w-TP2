<?php 
    $descCours  = get_the_content();
    $departement = get_field( "departement" );
?>
                            
    <div>

        <h2>
            <a href="<?php echo get_permalink(); ?>">
                <?= substr(get_the_title(), 7) ?>
            </a>
        </h2>
        <?php the_post_thumbnail("thumbnail") ?>
        <p>
            <?php 
            echo wp_trim_words($descCours, 20, '...<label class="button" for="modal' . get_the_id() . '">'
            .substr(get_the_title(), 0, 8)
            ."</label>");
            ?>

        </p>

        <input type="radio" name="modal" class="modal__checkbox" id="modal<?= get_the_id(); ?>">
        <article class="modal__article">
            <label for="fermer" class="modal__fermer"></label>
            <div>
                <p>
                    <?= $descCours ?>
                </p>
                <p>
                   Nombre d'heures: <?= get_field( "nombre_dheures" ); ?>
                </p>
                <p>
                    Sigle cours: <?= substr(get_the_title(), 0, 7); ?>
                </p>
            </div>
        </article>

        <footer>
            departement: <?php echo $departement; ?>
        </footer>
    </div>
