<?php /* Template Name: Blog */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1>Blog posts</h1>
    <?php the_content(); ?>
  </section>

  <section id="blog" class="max-w-5xl mx-auto px-6 pb-12">
    <div class="relative">
      <?php
        $btpgid=get_queried_object_id();
        $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 5,
          'category_name' => $btmetanm,
          'paged' => $paged,
          'post_type' => 'post'
        );
        $postslist = new WP_Query( $args );
        if ( $postslist->have_posts() ) : while ( $postslist->have_posts() ) : $postslist->the_post();
      ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4 lg:mb-8" />
        <h2 class="font-bold uppercase mb-4 lg:text-lg text-slate-500 contains-link"><?php the_category( ', ' ); ?></h2>
        <div class="md:grid md:grid-cols-5 md:gap-16 mb-16 md:mb-24">
          <?php
              $image = get_field('hero_image');
              $src = $image['sizes']['512x512'];
              $alt = $image['alt'];
              if( !empty($image) ):
            ?>
          <div class="image place-self-start col-span-2 md:order-2">
            <a href="<?php the_permalink(); ?>?href=image" class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
              <span class="aspect-video relative w-64 lg:w-96">
                <img class="js-lazyload object-cover w-full h-full" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="320" width="320" />
              </span>
            </a>
          </div>
          <?php endif; ?>
          <div class="content col-span-3 md:order-1">
            <h3 class="text-xl lg:text-2xl leading-relaxed text-midnight-500">
              <a class="link" href="<?php the_permalink(); ?>?href=title"><?php the_title(); ?></a>
            </h3>
            <p class="mt-4 pr-4 lg:pr-0 text-midnight-400 leading-relaxed">
              <?php the_field('excerpt'); ?>
            </p>
            <div class="flex items-center">
              <div class="avatar mt-7 mr-4">
                <a href="/team/<?php the_author_meta('nickname'); ?>?href=image" title="Find out more about <?php the_author(); ?>">
                  <?php echo get_wp_user_avatar($user_id, 96,'file'); ?>
                </a>
              </div>
              <div class="text text-sm">
                <h4 class="font-bold text-midnight-500 contains-link">
                  <a href="/team/<?php the_author_meta('nickname'); ?>?href=title" title="Find out more about <?php the_author(); ?>" class="inline-block pt-7"><?php the_author(); ?></a>
                </h4>
                <p class="font-medium text-slate-500"><?php the_date(); ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php include get_template_directory() . '/inc/pagination.php'; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
