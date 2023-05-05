<?php get_header() ?>

<main id="site-content">
	
	<div class="container">
		<div class="col-md-6 offset-3">
			<?php 
			if(is_front_page()){
				get_template_part('template-parts/identity-card');
			}else{
				 the_title();
				 the_content();
			}
			?>
		</div>
	</div>

</main>

<?php get_footer() ?>