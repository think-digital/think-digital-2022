<?php get_header(); ?>

<main id="main" role="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/case-studies">Case studies</a></li>
      <li class="truncate-text"><?php echo the_title(); ?></li>
    </ul>
    <h1><?php the_title(); ?></h1>
    <h2 class="text-xl lg:text-2xl text-emerald-800 uppercase font-bold mb-8"><?php the_field('client'); ?></h2>
    <p><?php the_content(); ?></p>
  </section>

  <figure id="image" class="max-w-6xl mx-auto lg:px-6 lg:mb-16">
    <?php
      $image = get_field('hero_image');
      if( !empty($image) ):
      $src = $image['sizes']['1600x900'];
      $alt = $image['alt'];
    ?>
    <div class="aspect-video relative">
      <img class="js-lazyload object-cover w-full h-full lg:rounded-3xl" data-src="<?php echo $src; ?>" alt="" />
    </div>
    <?php endif; ?>
    <?php if (!empty($alt)) { ?>
    <figcaption class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 px-6 lg:px-0 text-slate-600"><?php include get_template_directory() . '/assets/comment.svg'; ?><span><?php echo $alt; ?></span></figcaption>
    <?php } ?>
  </figure>

  <section id="content" class="content-cms max-w-4xl mx-auto pt-8 lg:pt-4 pb-12 lg:pb-24 px-6">
    <?php if( get_field('the_aim') ): ?>
      <h2>The aim</h2>
      <?php the_field('the_aim'); ?>
    <?php endif; ?>
    <?php if( get_field('what_we_delivered') ): ?>
      <h2>What we delivered</h2>
      <?php the_field('what_we_delivered'); ?>
    <?php endif; ?>
    <?php if( get_field('the_results') ): ?>
      <h2>The results</h2>
      <?php the_field('the_results'); ?>
    <?php endif; ?>
  </section>

  <?php include get_template_directory() . '/inc/project-featured.php'; ?>

  <?php include get_template_directory() . '/inc/project-list.php'; ?>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
