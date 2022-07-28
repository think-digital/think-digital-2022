<?php /* Header */ ?>

<!DOCTYPE html>

<!--[if IE]><html class="no-js ie" lang="en" xml:lang="en" itemscope itemtype="http://schema.org/WebSite"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js" lang="en" xml:lang="en" itemscope itemtype="http://schema.org/WebSite">
<!--<![endif]-->

<head>

  <?php
        global $wp;
        $current_url = home_url(add_query_arg(array(),$wp->request));
    ?>

  <!-- so:meta -->
  <?php if( get_field('meta_title') ): ?>
  <title><?php the_field('meta_title'); ?></title>
  <meta itemprop="name" content="<?php the_field('meta_title'); ?>">
  <meta property="twitter:title" content="<?php the_field('meta_title'); ?>" />
  <meta property="og:title" content="<?php the_field('meta_title'); ?>" />
  <?php else: ?>
  <title><?php the_title(); ?> - <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
  <?php endif; ?>

  <?php if( get_field('meta_description') ): ?>
  <meta itemprop="description" content="<?php the_field('meta_description'); ?>">
  <meta property="twitter:description" content="<?php the_field('meta_description'); ?>" />
  <meta property="og:description" content="<?php the_field('meta_description'); ?>" />
  <?php endif; ?>

  <?php
    $image = get_field('meta_image');
    if( !empty($image) ):
    $thumb = $image['sizes']['1200x630'];
  ?>
  <meta itemprop="image" content="<?php echo $thumb; ?>">
  <meta property="twitter:image" content="<?php echo $thumb; ?>" />
  <meta property="og:image" content="<?php echo $thumb; ?>" />
  <?php endif; ?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="" />
  <meta name="generator" content="" />
  <meta name="author" content="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
  <meta name="copyright"
    content='<?php echo date('Y'); ?>, <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' />
  <meta name="Geo.Country" content="GB" />
  <meta name="Geo.Region" content="GB-BST" />
  <meta name="robots" content="all" />
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:site" content="@ThinkDigSol" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="thinkds.org" />
  <meta property="og:url" content="<?php echo $current_url; ?>" />
  <link rel="canonical" href="<?php esc_url(the_permalink()); ?>" />
  <!-- eo:meta -->

  <script defer>
  document.querySelector('html').classList.remove('no-js');
  document.querySelector('html').classList.add('js');
  </script>

  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <!-- so:favicon -->
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-180x180.png" defer>
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo get_template_directory_uri(); ?>/assets/favicons/android-icon-192x192.png" defer>
  <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon.ico"  defer/><![endif]-->
  <!-- eo:favicon -->

  <!-- so:stylesheets -->
  <link href="<?php echo get_template_directory_uri(); ?>/dist/output.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css"
    href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/global-min.css" async> -->
  <!-- <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- eo:stylesheets -->

  <!-- so:analytics -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-KZ7SZG6');
  </script>
  <!-- eo:analytics -->

</head>

<body <?php body_class(); ?>>

  <!-- so:analytics -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ7SZG6" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- eo:analytics -->

  <a href="#main" class="sr-only" title="Skip to main content">Skip to main content</a>

  <div id="page" class="l-page l-page--extra-large">

    <h1 class="my-class text-red-600">Example</h1>
    <h1 class="my-class text-blue-600">Example</h1>
    <h1 class="my-class text-green-600">Example</h1>

    <!-- so:header -->
    <header class="l-band">
      <div class="l-container l-container--extra-large">
        <div class="u-grid u-grid--gutter-10 u-grid--align-center">
          <div class="u-grid__item u-grid__item--none">
            <div class="c-logo">
              <a class="c-logo__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img class="c-logo__img js-lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                  alt="<?php bloginfo( 'name' ); ?>" />
              </a>
            </div>
          </div>
          <div class="u-grid__item u-grid__item--auto is-right-only">
            <div class="c-nav c-nav--overlay">
              <nav>
                <span class="c-nav__menu js-nav-open">
                  <i class="c-nav__icon fa fa-bars" aria-hidden="true"></i>
                </span>
                <div class="c-nav__overlay is-closed js-nav">
                  <span class="c-nav__close js-nav-close">
                    <i class="c-nav__icon fa fa-close" aria-hidden="true"></i>
                  </span>
                  <?php wp_nav_menu( array(
                    'menu' => 'Nav',
                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_class' => 'c-nav__panel u-grid u-grid--align-center u-grid--justify-center',
                    'container_id' => '',
                    'menu_class' => 'c-nav__list u-grid__item u-grid__item--auto',
                    'menu_id' => ' ' ) );
                  ?>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- eo:header -->