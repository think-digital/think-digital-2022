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
  <?php if( is_front_page() && ! is_home() ) { ?>
    <title>THINK Digital | A digital agency that helps non-profits around the world</title>
  <?php } else { ?>
    <title><?php the_field('meta_title'); ?> | THINK Digital</title>
  <?php } ?>
  <meta itemprop="name" content="<?php the_field('meta_title'); ?>">
  <meta property="twitter:title" content="<?php the_field('meta_title'); ?>" />
  <meta property="og:title" content="<?php the_field('meta_title'); ?>" />
  <?php else: ?>
  <title>
    <?php global $page, $paged;
      if ( is_404() ) {
        echo __('Page not Found | THINK Digital','mytheme');
      }
      else {
        wp_title(' | THINK Digital', true, 'right' );
      }
    ?>
  </title>
  <?php endif; ?>

  <?php if( get_field('meta_description') ): ?>
  <meta name="description" content="<?php the_field('meta_description'); ?>" />
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
  <meta name="generator" content="" />
  <meta name="author" content="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
  <meta name="copyright"
    content='<?php echo date('Y'); ?>, <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' />
  <meta name="Geo.Country" content="GB" />
  <meta name="Geo.Region" content="GB-BST" />
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

  <!-- so:favicon -->
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-180x180.png" defer>
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo get_template_directory_uri(); ?>/assets/favicons/android-icon-192x192.png" defer>
  <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon.ico"  defer/><![endif]-->
  <!-- eo:favicon -->

  <!-- so:stylesheets -->
  <link href="<?php echo get_template_directory_uri(); ?>/dist/output.css" rel="stylesheet">
  <!-- eo:stylesheets -->

  <!-- so:javascripts -->
  <script defer>
  document.querySelector('html').classList.remove('no-js');
  document.querySelector('html').classList.add('js');
  </script>
  <!-- eo:javascripts -->

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

  <a href="#main" class="sr-only">Skip to main content</a>

  <div id="page">

    <?php include get_template_directory() . '/inc/nav.php'; ?>
