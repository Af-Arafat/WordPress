<?php 

if (have_posts()):
    while(have_posts()):
        the_post(); ?>
        <!-- html  -->
        <?php endwhile;
        endif;
?>