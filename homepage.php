

<?php

/*
* Template Name: Home Page
*/

get_header(); ?>

         <?php
         if (have_posts()) {
             while (have_posts()) {
                 the_post();
         ?>


        <div class="row">
            <?php the_content(); ?>

        </div>
        <?php
                }
            }
        ?>

<?php get_footer(); ?>
