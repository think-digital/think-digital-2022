<?php get_header(); ?>

<main id="main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

  <section id="content">
    <div class="grid">
      <div class="grid__item">
        <h3><?php the_title(); ?></h3>
        <?php if( get_field('role') ): ?>
        <p><?php the_field('role'); ?></p>
        <?php endif; ?>
        <?php $image = get_field('avatar'); if( !empty($image) ): ?>
        <img data-src="<?php echo $image['url']; ?>" />
        <?php endif; ?>
        <?php if( get_field('bio') ): ?>
        <p><?php the_field('bio'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php endwhile; wp_reset_query(); ?>

</main>

<?php get_footer(); ?>