<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : 31w
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
               <h1>
                   <a href="<?= esc_url( home_url( '/' ) ); ?>"><?= bloginfo( 'name' ); ?></a>
               </h1>
               <h2><?= bloginfo( 'description' ); ?></h2>
            </section>
            <nav class="site__navigation">
            Le menu va etre generer par worpress
            </nav>
        </header>
        <section class="site__sidebar">

            <h3>contenu pertinent</h3>

            <?php wp_nav_menu(array(
                        'menu' => '',
                        'container' => 'nav',
                        'container_class' => 'menu__sidebar',
                        'menu_class' => 'menu__sidebar__ul'
            )) ?>
    
            <h3>Un sous titre</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae omnis sed totam deleniti quasi quam reprehenderit mollitia tempora consequuntur eius. Libero necessitatibus tempora dicta nam repellendus, nemo consectetur officiis deleniti.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae omnis sed totam deleniti quasi quam reprehenderit mollitia tempora consequuntur eius. Libero necessitatibus tempora dicta nam repellendus, nemo consectetur officiis deleniti.
            </p>
        </section>
