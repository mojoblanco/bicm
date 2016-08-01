<?php get_header(); ?>

	<div class="row">
		<div class="col-md-12">
			<ul class="Top-Bar">
				<h1>All News</h1>
			</ul>
		</div> <!-- .col-md-12 ends here -->
	</div> <!-- .row ends here -->

	<div class="row">
		<div class="col-md-9 col-xs-12 bg-gradient News-holder mar-bottom-lg">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                <div class="News-items Bottom-border">
                    <div class="News-brief">
                        <h2 class="pad-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <h5 class="pad-bottom"><?php the_excerpt('d M y'); ?></h5>

                        <div class="date-Cat pad-bottom-xs"><?php the_time('d M y'); ?> | <?php the_category(','); ?></div></br>

                        <a href="<?php the_permalink(); ?>" class="btn-blue">MORE <span class="fa fa-long-arrow-right"></span></a>
                    </div> <!-- .News-brief ends here -->
                    <?php if (has_post_thumbnail()) : ?>
                        <aside>
                            <?php the_post_thumbnail('medium', ['class' => 'hidden-xs']); ?>
                        </aside>
                    <?php endif; ?>

                </div> <!-- .News-items ends here -->
            <?php
                }
            }
             ?>



			<div class="pagination-holder pg-mid">
	            <ul class="pagination">
    				<li><?php previous_posts_link('<i class="fa fa-angle-double-left"></i>'); ?></li>
    			    <li><?php next_posts_link('<i class="fa fa-angle-double-right"></i>'); ?></li>
                </ul>
			</div> <!-- .pagination-holder ends here -->
		</div> <!-- .col-md-9 .News-holder ends here -->

		<div class="col-md-3 col-xs-12">
			<?php get_sidebar(); ?>
		</div> <!-- .col-md-3 ends here -->
	</div>  <!-- .row ends here -->

<?php get_footer(); ?>
