<?php get_header() ?>

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
<p>Source: index.php </p>

<?php get_footer() ?>
