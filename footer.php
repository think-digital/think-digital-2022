<?php /* Footer */ ?>

<!-- so:footer -->
<footer class="bg-midnight-500">
  <!-- Links -->
  <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-4 gap-6 text-white">
    <!-- Pages -->
    <nav class="footer-nav">
      <ul class="">
        <li>
          <a href="/" class="link text-xl" title="Home">Home</a>
        </li>
        <li class="mt-6">
          <a href="/about" class="link text-xl" title="About">About</a>
          <ul class="">
            <li class="mt-6">
              <a href="/about/team" class="link font-medium" title="Our team">Our team</a>
            </li>
          </ul>
        </li>
        <li class="mt-6">
          <a href="/contact" class="link text-xl" title="Contact">Contact</a>
        </li>
      </ul>
    </nav>
    <!-- Services -->
    <nav class="footer-nav">
      <ul class="">
        <li>
          <a href="/services" class="link text-xl" title="Services">Services</a>
          <?php
            // Load 'posts' custom post type
            $posts = get_posts(array(
            'post_type'  => 'services',
            'posts_per_page'  => -1,
            'order'   => 'ASC'
            ));
            if( $posts ):
          ?>
          <ul class="">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <li class="mt-6">
              <a href="<?php the_permalink(); ?>" class="link font-medium" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </li>
      </ul>
    </nav>
    <!-- Case studies -->
    <nav class="footer-nav">
      <ul class="">
        <li>
          <a href="/case-studies" class="link text-xl" title="Case studies">Case studies</a>
          <?php
            // Load 'posts' custom post type
            $posts = get_posts(array(
            'post_type'  => 'casestudy',
            'posts_per_page'  => 5,
            'order'   => 'ASC'
            ));
            if( $posts ):
          ?>
          <ul class="">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <li class="mt-6">
              <small class="block text-slate-300 mb-1 text-sm"><?php the_field('client'); ?></small>
              <a href="<?php the_permalink(); ?>" class="link font-medium" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </li>
      </ul>
    </nav>
    <!-- Blog -->
    <nav class="footer-nav">
      <ul class="">
        <li>
          <a href="/blog" class="link text-xl" title="Blog">Blog</a>
          <?php
            // Load 'posts' custom post type
            $posts = get_posts(array(
            'post_type'  => 'post',
            'posts_per_page'  => 3,
            'order'   => 'ASC'
            ));
            if( $posts ):
          ?>
          <ul class="">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <li class="mt-6">
              <a href="<?php the_permalink(); ?>" class="link font-medium" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              <small class="flex space-x-4 text-slate-300 mt-2 text-sm">
                <a href="<?php the_author_url(); ?>" class="font-bold hover:text-emerald-500" title="Find out more about <?php the_author(); ?>"><?php the_author(); ?></a>
                <span><?php the_date(); ?></span>
              </small>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </li>
      </ul>
    </nav>
  </div>
  <!-- Content -->
  <div class="max-w-7xl mx-auto px-6 pb-16 text-white">
    <hr class="border-white border-1 opacity-20 mb-12" />
    <!-- Logo -->
    <div class="logo">
      <a href="/" class="inline-block" title="THINK Digital homepage" rel="home">
        <img class="js-lazyload rounded-full w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="THINK Digital" height="48" width="48" />
      </a>
    </div>
    <div class="text-sm mt-4">
      <p>© 2022 THINK Digital. All Rights Reserved</p>
      <div class="flex space-x-4 mt-4 justify-between">
        <div class="flex space-x-4">
          <p>Company Number: 08098477</p>
          <p>Registered Address: Investment House, 22-26 Celtic Court, Ballmoor, Buckingham, MK18 1RQ</p>
        </div>
        <p class="text-right">
          <a href="#" class="svg-icon-4 font-bold flex fill-white space-x-2 hover:text-emerald-500 hover:fill-emerald-500" title="Back to top"><span>Back to top</span> <?php include get_template_directory() . '/assets/arrow-up-circle.svg'; ?></a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- eo:footer -->

</div>

<!-- so:javascripts -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/modernizer/modernizer-min.js" defer>
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/lazy-load/lazyload-min.js" defer>
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/global-min.js" defer></script> -->
<!-- eo:javascripts -->

</body>

</html>
