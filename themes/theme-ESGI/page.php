<?php get_header() ?>

<main id="site-content">
	
	<div class="container">
		<div class="col-md-6 offset-3">
			<?php 
			if(is_front_page()){
				get_template_part('template-parts/identity-card');
			}else{ ?>
				 <h1 class="page-title"> <?php the_title(); ?> </h1>
				 <div class="page-content"> <?php the_content(); ?> </div>
			
			<?php } ?>
		</div>
	</div>

</main>

<?php get_footer() ?>