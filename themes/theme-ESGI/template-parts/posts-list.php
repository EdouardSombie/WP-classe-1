<?php 
$args = [
			'numberposts' => 6,
		];
$posts = get_posts($args);

?>
<section class="posts-list col-md-6 offset-3">
	<ul>
		<?php 
		foreach ($posts as $p) { ?>
			<li><a href="<?= get_permalink($p->ID) ?>"><span><?= $p->post_title ?></span> <time><?= wp_date('j F Y', strtotime($p->post_date)) ?></time></a></li>
		<?php } ?>
	</ul>
</section>