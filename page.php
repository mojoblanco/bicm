<?php get_header(); ?>

         <?php
         if (have_posts()) { ?>

             <div class="row">
             	<div class="col-md-12">
             		<ul class="Top-Bar">
             			<h1><?php the_title(); ?></h1>
             		</ul>
             	</div> <!-- .col-md-12 ends here -->
             </div> <!-- .row ends here -->
         <?php
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
