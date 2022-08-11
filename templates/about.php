<?php /* Template Name: About */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1>About us</h1>
    <p><?php the_field('excerpt'); ?></p>
  </section>

  <section id="image" class="max-w-6xl mx-auto px-6 mb-16">
    <?php
			$image = get_field('hero_image');
			if( !empty($image) ):
			$src = $image['sizes']['1600x900'];
      $alt = $image['alt'];
		?>
    <img class="aspect-video object-cover w-full rounded-3xl" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" />
    <?php endif; ?>
    <?php if (!empty($alt)) { ?>
    <p class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 text-slate-600"><?php include get_template_directory() . '/assets/comment.svg'; ?><span><?php echo $alt; ?></span></p>
    <?php } ?>
  </section>

  <section id="content" class="content-cms max-w-4xl mx-auto pt-4 pb-24 px-6">
    <?php the_content(); ?>
  </section>

  <section id="content" class="max-w-6xl mx-auto px-6 mb-16">
    <div class="grid md:grid-cols-3 gap-12">
      <div class="panel content-cms">
        <?php the_field('panel_one'); ?>
      </div>
      <div class="panel content-cms">
        <?php the_field('panel_two'); ?>
      </div>
      <div class="panel content-cms">
        <?php the_field('panel_three'); ?>
      </div>
    </div>
  </section>

  <section id="clients" class="content-cms max-w-4xl mx-auto pt-4 pb-24 px-6">
    <?php the_field('footnote'); ?>
  </section>

  <?php include get_template_directory() . '/contact.php'; ?>

</main>

<?php get_footer(); ?>
