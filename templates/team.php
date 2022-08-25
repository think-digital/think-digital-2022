<?php /* Template Name: Team */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li class="parent"><a href="/about">About</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1>Meet the team</h1>
    <?php the_content(); ?>
  </section>

  <section id="team" class="max-w-6xl mx-auto px-6 pt-16 pb-16">
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
      <div class="grid md:grid-cols-2 gap-x-16 gap-y-20">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <div class="item">
          <?php
            $image = get_field('avatar');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
          <div class="team-avatar mb-6">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <img class="js-lazyload w-64 object-cover rounded-2xl aspect-square" src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="512" width="512" />
            </a>
          </div>
          <?php endif; ?>
          <div class="pr-6">
            <h3 class="text-2xl leading-relaxed text-midnight-500">
              <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <h4 class="text-lg leading-relaxed mt-4 text-slate-500 uppercase font-bold"><?php the_field('role'); ?></h4>
            <p class="text-lg leading-relaxed mt-4 text-midnight-400">
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
