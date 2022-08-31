<section id="services" class="<?php if( is_front_page() && ! is_home() ) { ?>max-w-7xl mt-12<?php } else { ?>max-w-6xl<?php } ?> mx-auto px-6 lg:pt-16 pb-12">
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
    <hr class="w-24	border-4 border-emerald-200 mb-4 lg:mb-6" />
    <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-12">Services</h2>
    <div class="grid md:grid-cols-2 <?php if( is_front_page() && ! is_home() ) { ?>lg:grid-cols-3<?php } ?> gap-12 lg:gap-20">
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
          <h3 class="<?php if( is_front_page() && ! is_home() ) { ?>text-lg lg:text-xl<?php } else { ?>text-xl lg:text-2xl<?php } ?> leading-relaxed text-midnight-500">
            <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <p class="<?php if( is_front_page() && ! is_home() ) { } else { ?>lg:text-xl<?php } ?> leading-relaxed mt-4 text-midnight-400">
            <?php the_field('excerpt'); ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-l mt-12 md:absolute md:mt-9 md:top-0 md:right-0 text-midnight-500">
      <a href="/services" class="link">View all services</a>
    </p>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</section>
