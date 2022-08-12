<?php /* Template Name: Contact */ get_header(); ?>

<main id="main" role="main">

  <section id="hero" class="l-band u-padding-bottom--20">
    <div class="l-container l-container--extra-large">
      <div class="c-hero">
        <?php
					$image = get_field('hero_image');
					if( !empty($image) ):
					$thumb = $image['sizes']['1400x800'];
				?>
        <div
          class="c-hero__image c-hero__image--gradient c-hero__image--desktop-crop <?php if( get_field('hero_image_position') ): ?><?php the_field('hero_image_position'); ?><?php endif; ?> js-object-fit">
          <img
            class="c-hero__img <?php if( get_field('hero_image_position') ): ?><?php the_field('hero_image_position'); ?><?php endif; ?> js-lazyload"
            data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" />
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="l-band  l-band--overlay-small u-padding-bottom--20">
    <div class="l-container l-container--medium">
      <div class="c-content is-center">
        <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="o-heading o-heading--large o-heading--inherit"><?php the_title(); ?></h1>
        <div class="o-text">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

</main>

<!-- so:footer -->
<footer class="l-band l-band--light u-padding-top--40 u-padding-bottom--40">
  <div class="l-container l-container--large is-center">
    <div class="u-grid u-grid--gutter-20 u-grid--align-stretch u-grid--justify-between u-grid--collapse">
      <div class="u-grid__item u-grid__item--auto">
        <div class="c-follow is-not-last">
          <h2 class="o-heading o-heading--label o-heading--label-dark">Follow us</h2>
          <div class="c-follow__list">
            <ul class="u-grid u-grid--inline u-grid--list u-grid--gutter-5">
              <li class="u-grid__item u-grid__item--auto">
                <a href="https://twitter.com/ThinkDigSol" class="o-button o-button--circle o-button--twitter-outline"
                  target="_blank" title="Follow on Twitter"><i class="fa fa-twitter" aria-label="Twitter"></i><span class="is-hidden">Follow on Twitter</span></a>
              </li>
              <li class="u-grid__item u-grid__item--auto">
                <a href="https://www.linkedin.com/company-beta/9240190/"
                  class="o-button o-button--circle o-button--linkedin-outline" target="_blank"
                  title="Follow on LinkedIn"><i class="fa fa-linkedin" aria-label="LinkedIn"></i><span class="is-hidden">Follow on LinkedIn</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="c-content">
          <div class="o-text o-text--small">
            <p><strong>Company Number:</strong> 08098477<br /><strong>Registered Address:</strong> Investment House,
              22-26 Celtic Court, Ballmoor, Buckingham, MK18 1RQ</p>
            <p><em>&copy; <?php echo date('Y'); ?> <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>. All
                Rights Reserved</em></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- eo:footer -->

</div>

<!-- so:javascripts -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/modernizer/modernizer-min.js" defer>
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/lazy-load/lazyload-min.js" defer>
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/global-min.js" defer></script>
<!-- eo:javascripts -->

</body>

</html>
