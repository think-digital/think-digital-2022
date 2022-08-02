<!-- so:header -->
<header <?php if( is_front_page() && ! is_home() ) { ?>class="pattern-bg"<?php } ?>>

  <div class="max-w-7xl mx-auto px-6 py-9 flex content-end items-end">
    <!-- Logo -->
    <a href="/" title="THINK Digital homepage" rel="home">
      <img class="js-lazyload" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="THINK Digital" height="64" width="64" />
    </a>
    <div class="navigation grow">
      <!-- Secondary Nav -->
      <nav class="secondary text-right font-medium mb-4 <?php if( is_front_page() && ! is_home() ) { ?>text-slate-300<?php } else { ?>text-slate-500<?php } ?>">
        <ul class="flex space-x-6 justify-end">
          <li>
            <a href="mailto:contact@thinkds.org" class="hover:text-emerald-500">contact@thinkds.org</a>
          </li>
          <li>
            <a href="tel:+441234567890" class="hover:text-emerald-500">+44 (0) 1234 567890</a>
          </li>
          <li>
            <a href="#" class="svg-icon-6 <?php if( is_front_page() && ! is_home() ) { ?>fill-slate-300 hover:fill-twitter<?php } else { ?>fill-twitter hover:opacity-80<?php } ?>">
              <?php include('assets/twitter.svg'); ?>
            </a>
          </li>
          <li>
            <a href="#" class="svg-icon-6 <?php if( is_front_page() && ! is_home() ) { ?>fill-slate-300 hover:fill-linkedin<?php } else { ?>fill-linkedin hover:opacity-80<?php } ?>">
              <?php include('assets/linkedin.svg'); ?>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Primary Nav -->
      <nav class="primary text-right <?php if( is_front_page() && ! is_home() ) { ?>text-white<?php } else { ?>text-midnight-500<?php } ?>">
        <ul class="parent-list flex space-x-9 text-right justify-end">
          <?php if( is_front_page() && ! is_home() ) { } else { ?>
            <li>
              <a href="/" class="parent-link<?php if (is_page('home')) echo ' current-page'; ?>" title="Home">Home</a>
            </li>
          <?php } ?>
          <li>
            <a href="/services" class="parent-link<?php if (is_page('services') || 'services' == get_post_type() ) echo ' current-page'; ?>" title="Services">Services</a>
            <?php
              // Load 'posts' custom post type
              $posts = get_posts(array(
              'post_type'  => 'services',
              'posts_per_page'  => -1,
              'order'   => 'ASC'
              ));
              if( $posts ):
            ?>
            <ul class="child-list">
              <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="child-link" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </li>
          <li>
            <a href="/case-studies" class="parent-link<?php if (is_page('case-studies') || 'casestudy' == get_post_type() ) echo ' current-page'; ?>" title="Case studies">Case studies</a>
            <?php
              // Load 'posts' custom post type
              $posts = get_posts(array(
              'post_type'  => 'casestudy',
              'posts_per_page'  => 5,
              'order'   => 'ASC'
              ));
              if( $posts ):
            ?>
            <ul class="child-list">
              <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="child-link" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </li>
          <li>
            <a href="/about" class="parent-link<?php if (is_page('about') || is_page('team') || 'team' == get_post_type() ) echo ' current-page'; ?>" title="About">About</a>
            <ul class="child-list">
              <li>
                <a href="/about/team" class="child-link" title="Our team">Our team</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/blog" class="parent-link<?php if (is_page('blog') || 'post' == get_post_type() ) echo ' current-page'; ?>" title="Blog">Blog</a>
            <?php
              // Load 'posts' custom post type
              $posts = get_posts(array(
              'post_type'  => 'post',
              'posts_per_page'  => 3,
              'order'   => 'ASC'
              ));
              if( $posts ):
            ?>
            <ul class="child-list">
              <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="child-link" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </li>
          <li>
            <a href="/contact" class="parent-link<?php if (is_page('contact')) echo ' current-page'; ?>" title="Contact">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php if( is_front_page() && ! is_home() ) { ?>
  <!-- Hero -->
  <section id="hero">
    <div class="max-w-7xl mx-auto px-6 py-24 pt-48 lg:pr-56">
      <h1 class="text-1xl lg:text-2xl font-bold text-emerald-500 mb-4">THINK Digital</h1>
      <p class="text-2xl leading-normal lg:text-4xl lg:leading-normal text-white font-bold mb-6">We are a digital agency that helps non-profit organisations around the world to build and grow their digital fundraising and marketing programmes.</p>
      <p class="text-base lg:text-2xl text-white">Find out <a href="/about" class="link">who we are</a> and <a href="/services" class="link">how we can help</a>.</p>
    </div>
  <section>
  <?php } ?>

</header>
<!-- eo:header -->
