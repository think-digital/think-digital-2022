<?php get_header();

	$field = get_field_object('client');
	$value = get_field('client');
	$label = $field['choices'][ $value ];
?>

<main id="main">

  <?php while ( have_posts() ) : the_post(); ?>

  <div data-client="<?php the_field('client'); ?>">

    <section id="hero" class="l-band">
      <div class="l-container l-container--extra-large">
        <div class="c-hero">
          <?php
					$image = get_field('hero');
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

    <section class="l-band l-band--overlay u-padding-bottom--10">
      <div class="l-container l-container--medium l-container--medium-full">
        <div class="c-content c-content--rounded c-content--dark is-center-only">
          <h1 class="o-heading o-heading--large o-heading--inherit o-heading--reduce-margin"><?php the_title(); ?>
          </h1>
          <h2 class="o-heading o-heading--small o-heading--client"><?php echo $label; ?></h2>
          <?php if( get_field('strapline') ): ?>
          <div class="o-text">
            <p><?php the_field('strapline'); ?></p>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="l-band u-padding-bottom--20">
      <div class="l-container l-container--medium l-container--medium-full">
        <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-10">
          <div class="u-grid__item u-grid__item--full">
            <?php if( get_field('the_aim') ): ?>
            <div class="c-content c-content--rounded c-content--border is-full-height">
              <h2 class="o-heading o-heading--client">The aim</h2>
              <div class="o-text"><?php the_field('the_aim'); ?></div>
            </div>
            <?php endif; ?>
          </div>
          <div class="u-grid__item u-grid__item--full">
            <?php if( get_field('what_we_delivered') ): ?>
            <div class="c-content c-content--rounded c-content--border is-full-height">
              <h2 class="o-heading o-heading--client">What we delivered</h2>
              <div class="o-text"><?php the_field('what_we_delivered'); ?></div>
            </div>
            <?php endif; ?>
          </div>
          <div class="u-grid__item u-grid__item--full">
            <?php if( get_field('the_results') ): ?>
            <div class="c-content c-content--rounded c-content--border is-full-height">
              <h2 class="o-heading o-heading--client">The results</h2>
              <div class="o-text"><?php the_field('the_results'); ?></div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

  </div>

  <?php wp_reset_postdata(); ?>

  <?php endwhile; ?>

  <section id="supporting" class="l-band u-padding-bottom--40">
    <div class="l-container l-container--large">

      <?php
		// Load 'services' custom post type
		$posts = get_posts(array(
			'post_type'  => 'casestudy',
      'posts_per_page'  => 3,
      'orderby' => 'rand',
		));
		if( $posts ):
	?>

      <div class="c-content is-center">
        <h2 class="o-heading">More case studies</h2>
      </div>

      <div class="c-accordian is-center">
        <div class="c-accordian__list">
          <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-10">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <div class="u-grid__item u-grid__item--third">
              <div class="c-accordian__item c-accordian__item--rounded c-accordian__item--fixed">
                <?php
										// Pull select (Option - option)
										$field = get_field_object('client');
										$value = get_field('client');
										$label = $field['choices'][ $value ];
									?>
                <div
                  class="c-accordian__heading c-accordian__heading--with-image c-accordian__heading--client js-accordian"
                  data-client="<?php the_field('client'); ?>">
                  <?php
												$image = get_field('hero');
												if( !empty($image) ):
												$thumb = $image['sizes']['200x200'];
											?>
                  <div class="o-thumbnail">
                    <img
                      class="c-accordian__image c-accordian__image--fixed o-image o-image--circle o-image--border-small o-image--border-dark o-image--size-64x64"
                      src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" height="76" width="76" />
                  </div>
                  <?php endif; ?>
                  <h3 class="o-heading o-heading--extra-small o-heading--reduce-margin"><?php the_title(); ?></h3>
                  <h4 class="o-heading o-heading--extra-extra-small o-heading--client"><?php echo $label; ?></h4>
                </div>
                <?php if( get_field('strapline') ): ?>
                <div class="c-accordian__panel c-accordian__panel--fixed" data-client="<?php the_field('client'); ?>">
                  <div class="c-accordian__content">
                    <div class="u-grid u-grid--wrap u-grid--align-center u-grid--justify-center">
                      <div class="u-grid__item">
                        <div class="o-text o-text--small">
                          <p><?php the_field('strapline'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="l-buttons l-buttons--fixed">
                    <p><a class="o-button o-button--full o-button--rounded o-button--client"
                        href="<?php the_permalink(); ?>" title="Read case study">Read case study</a></p>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>