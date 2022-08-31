<!-- so:header -->
<header <?php if( is_front_page() && ! is_home() ) { ?>class="pattern-bg"<?php } ?>>

  <div class="pt-20 max-w-7xl mx-auto px-6 lg:py-9 lg:flex content-end items-end" data-toggle>
    <!-- Logo -->
    <div class="logo flex lg:block items-center pb-8 lg:pb-0">
      <div class="basis-1/2">
        <a href="/" class="inline-block" title="THINK Digital homepage" rel="home">
          <img class="js-lazyload rounded-full w-16 h-16" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="THINK Digital" height="64" width="64" />
        </a>
      </div>
      <div class="lg:hidden basis-1/2 flex justify-end">
        <button class="menu-button" data-toggle-button>
          <span class="menu-label">Menu</span>
          <span class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>
      </div>
    </div>
    <div class="navigation grow lg:h-14">
      <!-- Secondary Nav -->
      <nav class="secondary absolute top-0 left-0 w-full px-6 py-4 text-right lg:relative lg:bg-transparent lg:px-0 lg:py-0 font-medium mb-4 text-sm <?php if( is_front_page() && ! is_home() ) { ?>bg-white text-midnight-500 lg:text-slate-300<?php } else { ?>bg-emerald-200 text-emerald-900 lg:text-slate-500<?php } ?>">
        <ul class="flex justify-between space-x-4 md:justify-end md:space-x-6 items-center">
          <li>
            <a href="mailto:contact@thinkds.org" class="hover:text-emerald-500">contact@thinkds.org</a>
          </li>
          <li>
            <a href="tel:+441234567890" class="hover:text-emerald-500">+44 (0) 1234 567890</a>
          </li>
          <li class="hidden lg:block">
            <a href="https://twitter.com/ThinkDigSol" target="_blank" class="svg-icon-6 <?php if( is_front_page() && ! is_home() ) { ?>fill-slate-300 hover:fill-twitter<?php } else { ?>fill-twitter hover:opacity-80<?php } ?>">
              <?php include get_template_directory() . '/assets/twitter.svg'; ?>
            </a>
          </li>
          <li class="hidden lg:block">
            <a href="https://www.linkedin.com/company/think-digital---consultancy/" target="_blank" class="svg-icon-6 <?php if( is_front_page() && ! is_home() ) { ?>fill-slate-300 hover:fill-linkedin<?php } else { ?>fill-linkedin hover:opacity-80<?php } ?>">
              <?php include get_template_directory() . '/assets/linkedin.svg'; ?>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Primary Nav -->
      <nav class="menu primary <?php if( is_front_page() && ! is_home() ) { ?>text-white<?php } else { ?>text-midnight-500<?php } ?>">
        <ul class="parent-list" data-toggle-menu>
          <?php if( is_front_page() && ! is_home() ) { } else { ?>
            <li>
              <a href="/" class="parent-link<?php if (is_page('home')) echo ' current-page'; ?>" title="Home">Home</a>
            </li>
          <?php } ?>
          <li>
            <a href="/services" class="parent-link<?php if (is_page('services') || 'services' == get_post_type() ) echo ' current-page'; ?>" title="Services"><span>Services</span></a>
          </li>
          <li>
            <a href="/case-studies" class="parent-link<?php if (is_page('case-studies') || 'casestudy' == get_post_type() ) echo ' current-page'; ?>" title="Case studies"><span>Case studies</span></a>
          </li>
          <li>
            <a href="/about" class="parent-link<?php if (is_page('about') || is_page('team') || 'team' == get_post_type() ) echo ' current-page'; ?>" title="About"><span>About</span></a>
          </li>
          <li>
            <a href="/blog" class="parent-link<?php if (is_page('blog') || 'post' == get_post_type() ) echo ' current-page'; ?>" title="Blog"><span>Blog</span></a>
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
    <div class="max-w-7xl mx-auto px-6 py-16 lg:pt-48 lg:pr-56">
      <h1 class="text-1xl lg:text-2xl font-bold text-emerald-500 mb-4">THINK Digital</h1>
      <p class="text-2xl leading-normal lg:text-4xl lg:leading-normal text-white font-bold mb-6">We are a digital agency that helps non-profit organisations around the world to build and grow their digital fundraising and marketing programmes.</p>
      <p class="text-base lg:text-2xl text-white">Find out <a href="/about" class="link">who we are</a> and <a href="/services" class="link">how we can help</a>.</p>
      <ul class="flex space-x-4 mt-8">
          <li class="lg:hidden">
            <a href="https://twitter.com/ThinkDigSol" target="_blank" class="svg-icon-6 fill-white hover:fill-twitter">
              <?php include get_template_directory() . '/assets/twitter.svg'; ?>
            </a>
          </li>
          <li class="lg:hidden">
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
