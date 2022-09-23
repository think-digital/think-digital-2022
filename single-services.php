<?php get_header(); ?>

<main id="main" role="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/services">Services</a></li>
      <li class="truncate-text"><?php echo the_title(); ?></li>
    </ul>
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('excerpt'); ?></p>
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
    <?php the_content(); ?>
  </section>

  <?php include get_template_directory() . '/inc/project-random.php'; ?>

  <?php include get_template_directory() . '/inc/services.php'; ?>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
