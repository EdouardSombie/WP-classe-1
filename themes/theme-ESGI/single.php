<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<h1><?php the_title() ?></h1>
		<div class="post-infos">
			<time><?= get_the_date('j F Y') ?></time>
			<?= get_avatar($post->post_author) ?>
			<span><?= get_the_author_meta('display_name', $post->ID) ?></span>
		</div>
		<?= get_the_post_thumbnail() ?>
		<?php the_content() ?>
	</div>
</main>

<?php get_footer(); ?>