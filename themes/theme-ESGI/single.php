<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<h1 class="post-title"><?php the_title() ?></h1>
		<div class="post-infos">
			<time><?= get_the_date('j F Y') ?></time>
			<?= get_avatar($post->post_author) ?>
			<span><?= get_the_author_meta('display_name', $post->ID) ?></span>
		</div>
		<div class="post-image"><?= get_the_post_thumbnail() ?></div>
		<div class="post-content">
			<?php the_content() ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>