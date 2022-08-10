<?php /* Single posts */ get_header(); ?>

<main id="main" role="main">



  <section id="intro" class="content-intro pb-9">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/blog">Blog</a></li>
      <li class="parent"><?php the_category( ', ' ); ?></li>
      <li class="truncate-text"><?php echo the_title(); ?></li>
    </ul>
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('excerpt'); ?></p>
  </section>

  <section id="meta" class="max-w-4xl mx-auto px-6 mb-16">
    <div class="grid md:grid-cols-2 items-center">
      <div class="author flex items-center">
        <div class="avatar avatar-featured mr-4">
          <a href="<?php the_author_url(); ?>" title="Find out more about <?php the_author(); ?>">
            <?php echo get_wp_user_avatar($user_id, 96,'file'); ?>
          </a>
        </div>
        <div class="text">
          <h4 class="font-bold text-midnight-500 contains-link">
            <a href="<?php the_author_url(); ?>" title="Find out more about <?php the_author(); ?>"><?php the_author(); ?></a>
          </h4>
          <p class="text-slate-500"><span class="font-medium"><?php the_date(); ?></span> &bull; <span><?php echo do_shortcode("[wtr-time]"); ?></span></p>
        </div>
      </div>
      <div class="share justify-self-end">
        <?php include get_template_directory() . '/share.php'; ?>
      </div>
    </div>
  </section>

  <section id="image" class="max-w-6xl mx-auto px-6 mb-16">
    <?php
			$image = get_field('hero_image');
			if( !empty($image) ):
			$src = $image['sizes']['1600x900'];
      $alt = $image['alt'];
		?>
    <img class="aspect-ratio w-full rounded-3xl" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" />
    <?php endif; ?>
    <p class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 text-slate-600"><?php include get_template_directory() . '/assets/comment.svg'; ?><span><?php echo $alt; ?></span></p>
  </section>

  <section id="content" class="content-cms">
    <?php the_content(); ?>
  </section>

  <?php include get_template_directory() . '/contact.php'; ?>

</main>

<?php get_footer(); ?>
