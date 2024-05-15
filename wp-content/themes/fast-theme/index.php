<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta <?php bloginfo('charset') ?> >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <header>
        <div class="wrapper">
            <h2> <?php bloginfo('name'); ?> </h2>
            <p> <?php bloginfo('description') ?> </p>
        </div>
        <?php ?>
    </header>

    <main>
        <?php 
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                
                <!-- html -->
                <h3 class="article-title">
                    <?php the_title() ?>
                </h3>
                <?php the_content() ?>

        <?php
        endwhile;
        endif;
         ?>
    </main>

<footer>
    <p>&copy; All Rights Reservrd</p>
</footer>

    <p>Source: index.php </p>
    <?php wp_footer() ?>
</body>
</html>