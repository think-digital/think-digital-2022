<?php /* Single posts */ get_header(); ?>

<main id="main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>
  <?php endwhile; ?>

  <section id="intro" class="content-intro pb-3 overflow-hidden">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/blog">Blog</a></li>
      <li class="parent"><?php the_category( ', ' ); ?></li>
      <li class="truncate-text"><?php echo the_title(); ?></li>
    </ul>
    <p class="strapline"><?php the_category( ', ' ); ?></p>
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('excerpt'); ?></p>
  </section>

  <section id="meta" class="max-w-4xl mx-auto px-6 mb-12 lg:mb-16">
    <div class="grid md:grid-cols-2 items-center">
      <div class="author flex items-center">
        <div class="avatar lg:avatar-featured mt-7 mr-4">
          <a href="/about/team/<?php the_author_meta('nickname'); ?>?href=image" title="Find out more about <?php the_author(); ?>">
            <?php echo get_wp_user_avatar($user_id, 96,'file'); ?>
          </a>
        </div>
        <div class="text text-sm lg:text-base">
          <h2 class="font-bold text-midnight-500 contains-link">
          <a href="/about/team/<?php the_author_meta('nickname'); ?>?href=title" title="Find out more about <?php the_author(); ?>"  class="inline-block pt-7"><?php the_author(); ?></a>
          </h2>
          <p class="text-slate-500"><span class="font-medium"><?php the_date(); ?></span> &bull; <span><?php echo do_shortcode("[wtr-time]"); ?></span></p>
        </div>
      </div>
      <div class="share mt-12 lg:mt-3 lg:justify-self-end">
        <?php include get_template_directory() . '/inc/share.php'; ?>
      </div>
    </div>
  </section>

  <figure id="image" class="max-w-6xl mx-auto lg:px-6 lg:mb-16">
    <?php
			$image = get_field('hero_image');
			if( !empty($image) ):
			$src = $image['sizes']['1600x900'];
      $alt = $image['alt'];
		?>
    <img class="js-lazyload aspect-video object-cover w-full lg:rounded-3xl" data-src="<?php echo $src; ?>" alt="" />
    <?php endif; ?>
    <?php if (!empty($alt)) { ?>
    <figcaption class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 px-6 lg:px-0 text-slate-600"><?php include get_template_directory() . '/assets/comment.svg'; ?><span><?php echo $alt; ?></span></figcaption>
    <?php } ?>
  </figure>

  <section id="content" class="content-cms max-w-4xl mx-auto pt-8 lg:pt-4 pb-12 lg:pb-24 px-6">
    <?php the_content(); ?>
  </section>

  <?php include get_template_directory() . '/inc/blog-post.php'; ?>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
