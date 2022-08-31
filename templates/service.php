<?php /* Template Name: Services */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1>How we can help</h1>
    <?php the_content(); ?>
  </section>

  <?php include get_template_directory() . '/inc/services.php'; ?>

  <?php include get_template_directory() . '/inc/projects.php'; ?>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
