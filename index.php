<?php /* Posts */ get_header(); ?>

<main id="main" role="main">

	<section id="intro" class="panel">
		<div class="grid">
			<div class="grid__item">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>