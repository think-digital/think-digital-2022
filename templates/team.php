<?php /* Template Name: Team */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1>Meet the team</h1>
    <?php the_content(); ?>
  </section>

  <section id="team" class="max-w-6xl mx-auto px-6 pb-12 lg:pt-16 lg:pb-28">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'team',
        'posts_per_page'  => -1,
        'order'   => 'ASC',
        ));
        if( $posts ):
      ?>
      <div class="grid md:grid-cols-2 gap-16 lg:gap-20">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <div class="item">
          <?php
            $image = get_field('avatar');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
          <div class="team-avatar mb-6">
            <a href="<?php the_permalink(); ?>?href=image" title="<?php the_title(); ?>">
              <span class="aspect-square relative w-36 lg:w-64">
                <img class="js-lazyload w-full h-full object-cover rounded-2xl" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="512" width="512" />
              </span>
            </a>
          </div>
          <?php endif; ?>
          <div class="pr-6">
            <h2 class="text-xl lg:text-2xl leading-relaxed lg:leading-relaxed text-midnight-500">
              <a class="link" href="<?php the_permalink(); ?>?href=title"><?php the_title(); ?></a>
            </h2>
            <h3 class="lg:text-lg leading-relaxed lg:leading-relaxed mt-2 lg:mt-4 text-slate-500 uppercase font-bold"><?php the_field('role'); ?></h3>
            <p class="lg:text-lg leading-relaxed lg:leading-relaxed mt-4 text-midnight-400">
              <?php the_field('excerpt'); ?>
            </p>
            <?php include get_template_directory() . '/inc/team-social.php'; ?>
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
