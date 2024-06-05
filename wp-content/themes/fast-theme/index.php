<?php get_header() ?>

<body <?php body_class() ?>>
    <header>
        <div class="wrapper">
            <h2> <?php bloginfo('name'); ?> </h2>
            <p class="tagline"> <?php bloginfo('description') ?> </p>
        </div>
        <?php ?>
    </header> 

    <main class="wrapper" >
        <?php 
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                
                <!-- html -->
                <h3 class="article-title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h3>
                <?php the_content() ?>

        <?php
        endwhile;
        endif;
         ?>
    </main>
    <p>Source: index.php </p>

<?php get_footer() ?>
