<?php /* Template Name: Projects */ get_header(); ?>

<main id="main" role="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1><?php echo the_title(); ?></h1>
    <?php the_content(); ?>
  </section>

  <?php include get_template_directory() . '/inc/project-featured.php'; ?>

  <?php include get_template_directory() . '/inc/project-list.php'; ?>

  <section id="content" class="max-w-6xl mx-auto px-6 mb-8 lg:mb-16">
    <div class="grid lg:grid-cols-3 gap-12">
      <div class="panel">
        <?php the_field('panel_one'); ?>
      </div>
      <div class="panel">
        <?php the_field('panel_two'); ?>
      </div>
      <div class="panel">
        <?php the_field('panel_three'); ?>
      </div>
    </div>
  </section>

  <section id="clients" class="content-cms max-w-4xl mx-auto pt-4 pb-24 px-6">
    <?php the_field('footnote'); ?>
  </section>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
