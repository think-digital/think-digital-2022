<?php /* Template Name: Client */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/about">About</a></li>
      <li>Clients</li>
    </ul>
    <h1><?php echo the_title(); ?></h1>
    <div class="content-cms">
      <?php the_content(); ?>
    </div>
  </section>

  <?php
			$image = get_field('hero_image');
			if( !empty($image) ):
			$src = $image['sizes']['1600x900'];
      $alt = $image['alt'];
		?>
  <section id="image" class="max-w-6xl mx-auto px-6 mb-16">
    <img class="js-lazyload aspect-video object-cover w-full rounded-3xl" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" />
    <?php if (!empty($alt)) { ?>
    <p class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 text-slate-600"><?php include get_template_directory() . '/assets/comment.svg'; ?><span><?php echo $alt; ?></span></p>
    <?php } ?>
  </section>
  <?php endif; ?>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
