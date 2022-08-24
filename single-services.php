<?php get_header(); ?>

<main id="main" role="main">

  <section id="intro" class="content-intro pb-9">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/services">Services</a></li>
      <li class="truncate-text"><?php echo the_title(); ?></li>
    </ul>
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('excerpt'); ?></p>
  </section>

  <section id="image" class="max-w-6xl mx-auto px-6 mt-16 mb-16">
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

  <section id="projects" class="max-w-7xl mx-auto px-6 pt-12 pb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'casestudy',
        'posts_per_page'  => 1,
        'order'   => 'ASC',
        'orderby' => 'rand',
        ));
        if( $posts ):
      ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-12">Featured case study</h2>
      <div class="grid md:grid-cols-2 text-white">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <?php
            $image = get_field('hero');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
        <img
          class="js-lazyload w-full h-full aspect-video object-cover rounded-t-2xl rounded-b-none md:rounded-l-none md:rounded-r-2xl md:order-2 md:aspect-4/3"
          src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="512" width="512" />
        <div
          class="rounded-b-2xl rounded-t-none md:rounded-r-none md:rounded-l-2xl md:order-1  bg-midnight-500 text-white flex justify-center items-center">
          <div class="max-w-md px-12 py-24">
            <h3 class="text-2xl font-bold mb-2 leading-relaxed"><?php the_title(); ?></h3>
            <h4 class="text-l text-emerald-500 uppercase font-medium mb-8"><?php the_field('client'); ?></h4>
            <div class="content-post mb-6">
              <?php the_field('excerpt'); ?>
            </div>
            <a class="link" href="<?php the_permalink(); ?>" title='Read "<?php the_title(); ?>" case study'>Read this case study</a>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <p class="text-l mt-12 md:absolute md:mt-9 md:top-0 md:right-0">
        <a href="#" class="link">View all case studies</a>
      </p>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <section id="services" class="max-w-6xl mx-auto px-6 pt-16 pb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'services',
        'posts_per_page'  => -1,
        'order'   => 'ASC',
        ));
        if( $posts ):
      ?>
      <div class="grid md:grid-cols-2 gap-x-16 gap-y-20">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <div class="item">
          <?php
            $image = get_field('icon');
            $src = $image['sizes']['64x64'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
          <div class="svg-icon-12 fill-emerald-500 mb-6">
            <?php echo file_get_contents($src); ?>
          </div>
          <?php endif; ?>
          <div class="pr-6">
            <h3 class="text-2xl leading-relaxed text-midnight-500">
              <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="text-xl leading-relaxed mt-4 text-midnight-400">
              <?php the_field('excerpt'); ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
