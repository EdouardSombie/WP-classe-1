<?php 
// $args = [
// 			'numberposts' => 6,
// 		];
// $posts = get_posts($args);

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
);

$the_query = new WP_Query( $args );

?>
<section class="posts-list col-md-6 offset-3">
	<ul>
		<?php 
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); // Réalise l'itération et crée la variable $post
				$p = get_post(); // Récupère le post courant
				?>
				<li><a href="<?= get_permalink($p->ID) ?>"><span><?= $p->post_title ?></span> <time><?= wp_date('j F Y', strtotime($p->post_date)) ?></time></a></li>
			<?php 
			}
		}
		?>
	</ul>

	<nav class="post-list-pagination">
	<?php
	$big = 999999999; // need an unlikely integer

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $the_query->max_num_pages
	) );
	?>
	</nav>




</section>