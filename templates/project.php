<?php /* Template Name: Projects */ get_header(); ?>

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

  <section id="content" class="l-band l-band--overlay-small">
    <div class="l-container l-container--large">
      <div class="c-content is-center">
        <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="o-heading o-heading--large o-heading--inherit"><?php the_title(); ?></h1>
        <div class="o-text"><?php the_content(); ?></div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <section id="case-studies" class="l-band">
    <div class="l-container l-container--large">

      <?php
				// Load 'services' custom post type
				$posts = get_posts(array(
					'post_type'  => 'casestudy',
					'posts_per_page'  => -1
				));
				if( $posts ):
			?>

      <div class="c-accordian is-center">
        <div class="c-accordian__list">
          <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-20">
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
                  <h2 class="o-heading o-heading--extra-small o-heading--reduce-margin"><?php the_title(); ?></h2>
                  <h3 class="o-heading o-heading--extra-extra-small o-heading--client"><?php echo $label; ?></h3>
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

  <section id="clients" class="l-band">
    <div class="l-container l-container--small">

      <?php
					// Load 'clients' custom post type
					$posts = get_posts(array(
						'post_type'  => 'clients',
						'posts_per_page'  => 12,
						'order'   => 'ASC'
					));
					if( $posts ):
				?>

      <div class="c-content is-center">
        <h2 class="o-heading o-heading--small">We are currently working with</h2>
      </div>

      <div class="c-clients is-center-only" style="padding-bottom: 20px;">
        <ul class="o-list o-list--unstyled o-list--buttons u-grid u-grid--wrap u-grid--justify-center">
          <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
          <li class="u-grid__item">
            <?php $image = get_field('logo'); if( !empty($image) ): ?>
            <span class="o-thumbnail">
              <?php if( get_field('url') ): ?><a href="<?php the_field('url'); ?>" target="_blank"><?php endif; ?>
                <span class="o-image o-image--circle o-image--logo">
                  <img class="js-lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />
                </span>
                <?php if( get_field('url') ): ?></a><?php endif; ?>
            </span>
            <?php endif; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
