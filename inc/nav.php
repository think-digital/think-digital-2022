<!-- so:header -->
<header <?php if( is_front_page() && ! is_home() ) { ?>class="pattern-bg"<?php } ?>>

  <div class="pt-20 max-w-7xl mx-auto px-6 md:py-9 flex content-end items-end">
    <!-- Logo -->
    <div class="logo">
      <a href="/" class="inline-block" title="THINK Digital homepage" rel="home">
        <img class="js-lazyload rounded-full w-16 h-16" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="THINK Digital" height="64" width="64" />
      </a>
    </div>
    <div class="navigation grow h-14">
      <!-- Secondary Nav -->
      <nav class="secondary absolute top-0 left-0 w-full px-4 py-4 bg-white text-right md:relative md:bg-transparent md:px-0 md:py-0 font-medium mb-4 text-sm <?php if( is_front_page() && ! is_home() ) { ?>text-midnight-500 md:text-slate-300<?php } else { ?>text-slate-500<?php } ?>">
        <ul class="flex justify-between md:space-x-6 md:justify-end">
          <li>
            <a href="mailto:contact@thinkds.org" class="hover:text-emerald-500">contact@thinkds.org</a>
          </li>
          <li>
            <a href="tel:+441234567890" class="hover:text-emerald-500">+44 (0) 1234 567890</a>
          </li>
          <li class="hidden md:block">
            <a href="https://twitter.com/ThinkDigSol" target="_blank" class="svg-icon-6 <?php if( is_front_page() && ! is_home() ) { ?>fill-slate-300 hover:fill-twitter<?php } else { ?>fill-twitter hover:opacity-80<?php } ?>">
              <?php include get_template_directory() . '/assets/twitter.svg'; ?>
            </a>
          </li>
          <li class="hidden md:block">
            <a href="https://www.linkedin.com/company/think-digital---consultancy/" target="_blank" class="svg-icon-6 <?php if( is_front_page() && ! is_home() ) { ?>fill-slate-300 hover:fill-linkedin<?php } else { ?>fill-linkedin hover:opacity-80<?php } ?>">
              <?php include get_template_directory() . '/assets/linkedin.svg'; ?>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Primary Nav -->
      <nav class="menu primary <?php if( is_front_page() && ! is_home() ) { ?>text-white<?php } else { ?>text-midnight-500<?php } ?>" data-toggle>
        <button class="menu-button lg:hidden" data-toggle-button>
          <span class="menu-label">Menu</span>
          <span class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>
        <ul class="parent-list lg:flex lg:space-x-9 lg:justify-end hidden" data-toggle-menu>
          <?php if( is_front_page() && ! is_home() ) { } else { ?>
            <li>
              <a href="/" class="parent-link<?php if (is_page('home')) echo ' current-page'; ?>" title="Home">Home</a>
            </li>
          <?php } ?>
          <li>
            <a href="/services" class="svg-icon-4 flex space-x-2 parent-link<?php if (is_page('services') || 'services' == get_post_type() ) echo ' current-page'; ?>" title="Services"><span>Services</span><?php include get_template_directory() . '/assets/arrow-down.svg'; ?></a>
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
            <a href="/case-studies" class="svg-icon-4 flex space-x-2 parent-link<?php if (is_page('case-studies') || 'casestudy' == get_post_type() ) echo ' current-page'; ?>" title="Case studies"><span>Case studies</span><?php include get_template_directory() . '/assets/arrow-down.svg'; ?></a>
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
            <a href="/about" class="svg-icon-4 flex space-x-2 parent-link<?php if (is_page('about') || is_page('team') || 'team' == get_post_type() ) echo ' current-page'; ?>" title="About"><span>About</span><?php include get_template_directory() . '/assets/arrow-down.svg'; ?></a>
            <ul class="child-list">
              <li>
                <a href="/about/team" class="child-link" title="Our team">Our team</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/blog" class="svg-icon-4 flex space-x-2 parent-link<?php if (is_page('blog') || 'post' == get_post_type() ) echo ' current-page'; ?>" title="Blog"><span>Blog</span><?php include get_template_directory() . '/assets/arrow-down.svg'; ?></a>
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
    <div class="max-w-7xl mx-auto px-6 py-16 pt-48 lg:pr-56">
      <h1 class="text-1xl lg:text-2xl font-bold text-emerald-500 mb-4">THINK Digital</h1>
      <p class="text-2xl leading-normal lg:text-4xl lg:leading-normal text-white font-bold mb-6">We are a digital agency that helps non-profit organisations around the world to build and grow their digital fundraising and marketing programmes.</p>
      <p class="text-base lg:text-2xl text-white">Find out <a href="/about" class="link">who we are</a> and <a href="/services" class="link">how we can help</a>.</p>
      <ul class="flex space-x-4 mt-8">
          <li class="md:hidden">
            <a href="https://twitter.com/ThinkDigSol" target="_blank" class="svg-icon-6 fill-white hover:fill-twitter">
              <?php include get_template_directory() . '/assets/twitter.svg'; ?>
            </a>
          </li>
          <li class="md:hidden">
            <a href="https://www.linkedin.com/company/think-digital---consultancy/" target="_blank" class="svg-icon-6 fill-white hover:fill-linkedin">
              <?php include get_template_directory() . '/assets/linkedin.svg'; ?>
            </a>
          </li>
        </ul>
    </div>
  <section>
  <?php } ?>

</header>
<!-- eo:header -->

<script>
  function menuToggle() {
    const toggles = document.querySelectorAll('[data-toggle]');
    toggles.forEach((toggle) => {
      const button = toggle.querySelector('[data-toggle-button]');
      button.addEventListener('click', () => {
        event.preventDefault();
        if (toggle.getAttribute('data-active')) {
          toggle.removeAttribute('data-active');
        } else {
          toggle.setAttribute('data-active', true);
        }
      });
    });
  }
  menuToggle();
</script>
