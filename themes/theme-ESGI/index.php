<?php get_header() ?>

<main id="site-content">
	<div class="container">
		<?php
		get_template_part('template-parts/identity-card');
		?>

		<?php 
		if(!is_front_page()){
			echo 'pas Accueil !!';
		}
		?>

	</div>
</main>

<?php get_footer() ?> 