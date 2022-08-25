<?php /* Template Name: Blog */ get_header(); ?>

<main id="main">

  <?php foreach ( ( get_the_category() ) as $category ) { ?>

    <section id="intro" class="content-intro">
      <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
        <li class="parent"><a href="/blog">Blog</a></li>
        <li><?php echo $category->name; ?></li>
      </ul>
        <h1><?php echo $category->name; ?> posts</h1>
    </section>

    <section id="blog" class="max-w-5xl mx-auto px-6">
      <div class="relative">
        <?php
          $btpgid=get_queried_object_id();
          $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page' => 5,
            'category_name' => $btmetanm,
            'paged' => $paged,
            'post_type' => 'post',
            'category_name'=>$category->slug,
          );
          $postslist = new WP_Query( $args );
          if ( $postslist->have_posts() ) : while ( $postslist->have_posts() ) : $postslist->the_post();
        ?>
        <hr class="w-24	border-4 border-emerald-200 mb-9" />
          <p class="font-bold uppercase mb-4 text-lg text-slate-500 contains-link"><?php the_category( ', ' ); ?></p>
          <div class="grid md:grid-cols-5 gap-16 mb-24">
            <div class="content col-span-3">
              <h3 class="text-2xl leading-relaxed text-midnight-500">
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
        <?php endwhile; ?>
        <?php include get_template_directory() . '/inc/pagination.php'; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </section>

  <?php } ?>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
