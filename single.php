<?php get_header(); ?>

<div class="row">
			<div class="col-md-12">
					<ul class="Top-Bar">
						<h1>News</h1>
					</ul>
			</div> <!-- .col-md-12 ends here -->
		</div> <!-- .row ends here -->

	<div class="row">
		<div class="col-md-9 col-xs-12 mar-bottom-lg">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
			 <div class="Single-News-item ">
				<div class="News-full">
					<h2 class="pad-bottom"><?php the_title(); ?></h2>
					<div class="date-Cat pad-bottom-xs"><?php the_time('d M y'); ?> | <?php the_category(','); ?></div></br>
                    <?php if (has_post_thumbnail()) : ?>
					<div class="Image-holder">
						<?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
					</div>
                    <?php endif; ?>

					<?php the_content(); ?>

                    <?php the_tags(); ?>

				</div> <!-- .News-brief ends here -->
			</div> <!-- .News-items ends here -->

			<?php comments_template(); ?>

            <?php
                }
            }
             ?>

		</div> <!-- .col-md-9 ends here -->

		<div class="col-md-3 col-xs-12">
			<div class="search-bar-holder">
				<form role="form">
					<div class="form-group">
					      <input type="search" class="form-control" placeholder="Search...">
					    </div>
				</form>
			</div> <!-- .search-bar-holder ends here -->


			<!-- Tabs starts here-->
			<ul class="Section-Head Sidebar-Links nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#categories">Categories |</a></li>
			    <li><a data-toggle="tab" href="#Archives">Archives</a></li>
			</ul>

			  <div class="tab-content">
			    <div id="categories" class="tab-pane fade in active">
			      	<div>
						<ul class="links-holder">
							<li><span class="fa fa-chevron-right"></span> News</li>
							<li><span class="fa fa-chevron-right"></span> Prayer & Fellowship</li>
							<li><span class="fa fa-chevron-right"></span> Bible Study</li>
							<li><span class="fa fa-chevron-right"></span> Encouragement</li>
							<li><span class="fa fa-chevron-right"></span> Testimonies</li>
						</ul>
					</div>
			    </div>

			    <div id="Archives" class="tab-pane fade">
			      <div>
						<ul class="links-holder">
							<li><span class="fa fa-chevron-right"></span> Some News</li>
							<li><span class="fa fa-chevron-right"></span> Here and there</li>
							<li><span class="fa fa-chevron-right"></span> Things here</li>
							<li><span class="fa fa-chevron-right"></span> Away things</li>
							<li><span class="fa fa-chevron-right"></span> People here</li>
						</ul>
					</div>
			    </div>
			  </div>

			<div class="card-holder">
				<img class="card-img" src="images/img-03.png">
				<p class="card-blue-mid">Join our</br>prayer group</p>
				<p class="card-bottom thin-border-3-b">
					Lorem ipsum dolor sit amet, compus ac libero.</br>
					<a href="#">Submit a prayer request <span class="fa fa-chevron-right"></span></a>
				</p>
			</div>
		</div> <!-- .col-md-3 ends here -->
	</div>  <!-- .row ends here -->


<?php get_footer(); ?>
