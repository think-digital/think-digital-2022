<?php /* Template Name: Clients */ get_header(); ?>

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

  <section id="clients">

    <?php
			// Load 'clients' custom post type
			$posts = get_posts(array(
				'post_type'  => 'clients',
				'posts_per_page'  => 12,
				'order'   => 'ASC'
			));
			if( $posts ):
		?>

    <div class="grid grid--1of6">
      <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
      <?php $image = get_field('logo'); if( !empty($image) ): ?>
      <div class="grid__item grid--1of6">
        <?php if( get_field('url') ): ?><a href="<?php the_field('url'); ?>" target="_blank"><?php endif; ?>
          <img data-src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />
          <?php if( get_field('url') ): ?></a><?php endif; ?>
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  </section>

</main>

<?php get_footer(); ?>