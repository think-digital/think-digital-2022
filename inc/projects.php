<section id="projects" class="max-w-7xl mx-auto px-6 pt-4 lg:pt-12 pb-12 lg:pb-24">
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
    <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-8 lg:mb-12">Featured case study</h2>
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
        class="rounded-b-2xl rounded-t-none md:rounded-r-none md:rounded-l-2xl md:order-1 bg-midnight-500 text-white flex justify-center items-center">
        <div class="lg:max-w-lg px-6 py-6 pb-8 md:px-12 md:py-12 lg:py-24">
          <h3 class="text-xl lg:text-2xl font-bold mb-2 leading-relaxed"><?php the_title(); ?></h3>
          <h4 class="text-l text-emerald-500 uppercase font-medium mb-4 lg:mb-8"><?php the_field('client'); ?></h4>
          <div class="content-post mb-6">
            <?php the_field('excerpt'); ?>
          </div>
          <a class="link" href="<?php the_permalink(); ?>" title='Read "<?php the_title(); ?>" case study'>Read this case study</a>
        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <p class="text-l mt-6 lg:mt-12 md:absolute md:top-0 md:right-0 text-midnight-500">
      <a href="/case-studies" class="link">View all case studies</a>
    </p>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</section>
