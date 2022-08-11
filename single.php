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
    <img class="aspect-video object-cover w-full rounded-3xl" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" />
    <?php endif; ?>
    <?php if (!empty($alt)) { ?>
    <p class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 text-slate-600"><?php include get_template_directory() . '/assets/comment.svg'; ?><span><?php echo $alt; ?></span></p>
    <?php } ?>
  </section>

  <section id="content" class="content-cms max-w-4xl mx-auto pt-4 pb-24 px-6">
    <?php the_content(); ?>
  </section>

  <section id="blog" class="max-w-5xl mx-auto px-6">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'order' => 'ASC',
        'exclude' => get_the_ID(),
        ));
        if( $posts ):
      ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-3xl font-bold text-midnight-500 mb-12">Next blog post</h2>
      <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <p class="font-bold uppercase mb-4 text-lg text-slate-500 contains-link"><?php the_category( ', ' ); ?></p>
        <div class="grid md:grid-cols-5 gap-16 mb-24">
          <div class="content col-span-3">
            <h3 class="text-2xl leading-relaxed">
              <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="mt-4 text-midnight-400 leading-relaxed">
              <?php the_field('excerpt'); ?>
            </p>
            <div class="flex items-center mt-6">
              <div class="avatar mr-4">
                <a href="<?php the_author_url(); ?>" title="Find out more about <?php the_author(); ?>">
                  <?php echo get_wp_user_avatar($user_id, 96,'file'); ?>
                </a>
              </div>
              <div class="text text-sm">
                <h4 class="font-bold text-midnight-500 contains-link">
                  <a href="<?php the_author_url(); ?>" title="Find out more about <?php the_author(); ?>"><?php the_author(); ?></a>
                </h4>
                <p class="font-medium text-slate-500"><?php the_date(); ?></p>
              </div>
            </div>
          </div>
          <?php
              $image = get_field('hero_image');
              $src = $image['sizes']['512x512'];
              $alt = $image['alt'];
              if( !empty($image) ):
            ?>
          <div class="image place-self-start col-span-2">
            <a href="<?php the_permalink(); ?>" class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
              <img class="js-lazyload aspect-video object-cover w-full" src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="320" width="320" />
            </a>
          </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
      <p class="mt-12 md:absolute md:mt-9 md:top-0 md:right-0">
        <a href="#" class="link text-l">View all blog posts</a>
      </p>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <?php include get_template_directory() . '/contact.php'; ?>

</main>

<?php get_footer(); ?>
