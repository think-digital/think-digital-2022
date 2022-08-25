<?php get_header(); ?>

<main id="main" role="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/case-studies">Case studies</a></li>
      <li class="truncate-text"><?php echo the_title(); ?></li>
    </ul>
    <h1><?php the_title(); ?></h1>
    <h2 class="text-2xl text-emerald-500 uppercase font-bold mb-8"><?php the_field('client'); ?></h2>
    <p><?php the_content(); ?></p>
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

  <section id="featured" class="max-w-7xl mx-auto px-6 pb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'casestudy',
        'posts_per_page'  => 1,
        'order'   => 'ASC',
        'exclude' => get_the_ID(),
        ));
        if( $posts ):
      ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-12">Next case study</h2>
      <div class="grid md:grid-cols-2 text-white">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <?php
            $image = get_field('hero');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
        <img
          class="js-lazyload w-full h-full aspect-video object-cover rounded-t-2xl rounded-b-none md:rounded-l-none md:rounded-r-2xl md:order-2 md:aspect-[4/3]"
          src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="512" width="512" />
        <div
          class="rounded-b-2xl rounded-t-none md:rounded-r-none md:rounded-l-2xl md:order-1  bg-midnight-500 text-white flex justify-center items-center">
          <div class="max-w-md px-12 py-24">
            <h3 class="text-2xl font-bold mb-2 leading-relaxed"><?php the_title(); ?></h3>
            <h4 class="text-l text-emerald-500 uppercase font-bold mb-8"><?php the_field('client'); ?></h4>
            <div class="content-post mb-6">
              <?php the_field('excerpt'); ?>
            </div>
            <a class="link text-lg text-midnight-500" href="<?php the_permalink(); ?>" title='Read "<?php the_title(); ?>" case study'>Read this case study</a>
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

  <section id="projects" class="max-w-5xl mx-auto px-6 mb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'casestudy',
        'order'   => 'ASC',
        'offset' => 1,
        'exclude' => get_the_ID(),
        ));
        if( $posts ):
      ?>
      <div class="grid md:grid-cols-5 gap-x-16 gap-y-24">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <?php
            $image = get_field('hero');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
          <div class="image place-self-center col-span-2">
            <a href="<?php the_permalink(); ?>" class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
              <img class="js-lazyload aspect-video object-cover w-full md:aspect-[4/3]" src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="512" width="512" />
            </a>
          </div>
        <?php endif; ?>
        <div class="content col-span-3">
          <hr class="w-24	border-4 border-emerald-200 mb-9" />
          <h3 class="font-bold text-2xl text-midnight-500 mb-2"><?php the_title(); ?></h3>
          <h4 class="font-bold uppercase mb-4 text-lg text-emerald-500"><?php the_field('client'); ?></h4>
          <div class="content-post mt-4 mb-6 text-midnight-400 leading-relaxed">
            <?php the_field('excerpt'); ?>
          </div>
          <p><a class="link text-midnight-500 text-lg" href="<?php the_permalink(); ?>" title='Read "<?php the_title(); ?>" case study'>Read this case study</a></p>
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
