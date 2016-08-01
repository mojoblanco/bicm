<!Doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

</head>

<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bicm/assets/images/logo.png" width="200"></div>

			<div class="col-md-push-7 col-md-3">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook round-FB"></a></li>
					<li><a href="#" class="fa fa-twitter round-TW"></a></li>
					<li><a href="#" class="fa fa-youtube round-YT"></a></li>
				</ul>
			</div>

		</div> <!-- .row ends here -->

		<div class="row">
			<div class="col-md-12">
                <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'Navigation'

                        ]
                    );
                 ?>
			</div> <!-- .col-md-12 ends here -->
		</div> <!-- .row ends here -->
	</div> <!-- .container ends here -->
</header>

<div class="container">
