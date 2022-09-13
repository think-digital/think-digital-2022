<?php /* Template Name: Confirmation */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li>Contact</li>
    </ul>
    <h1><?php echo the_title(); ?></h1>
    <?php the_content(); ?>
  </section>

  <section id="content" class="max-w-6xl mx-auto px-6 mb-8 lg:mb-36">
    <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
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

</main>

<?php get_footer(); ?>
