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

  <section id="featured" class="max-w-7xl mx-auto px-6 pb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'casestudy',
        'posts_per_page'  => 1,
        'order'   => 'ASC',
        ));
        if( $posts ):
      ?>
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
            <a class="link text-lg" href="<?php the_permalink(); ?>" title='Read "<?php the_title(); ?>" case study'>Read this case study</a>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
      </div>
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

  <section id="content" class="max-w-6xl mx-auto px-6 mb-16">
    <div class="grid md:grid-cols-3 gap-12">
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