<?php /* Template Name: Services */ get_header(); ?>

<main id="main">

  <section id="hero" class="l-band">
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

  <section id="content" class="l-band l-band--overlay-small u-padding-top--20 u-padding-bottom--20">
    <div class="l-container l-container--large">

      <div class="c-content is-center">
        <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="o-heading o-heading--large o-heading--inherit"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>

      <?php
				// Load 'services' custom post type
				$posts = get_posts(array(
				'post_type'  => 'services',
				'posts_per_page'  => -1,
				'order'   => 'ASC'
				));
				if( $posts ):
			?>

      <div class="c-accordian">
        <div class="c-accordian__list">
          <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-20 u-grid--justify-center">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <div class="u-grid__item u-grid__item--half">
              <div class="c-accordian__item c-accordian__item--rounded c-accordian__item--fixed is-center">
                <div class="c-accordian__heading js-accordian">
                  <h2 class="o-heading o-heading--small o-heading--inherit"><?php the_title(); ?></h2>
                </div>
                <?php if( get_field('excerpt') ): ?>
                <div class="c-accordian__panel c-accordian__panel--fixed">
                  <div class="c-accordian__content">
                    <div class="u-grid u-grid--wrap u-grid--align-center u-grid--justify-center">
                      <div class="u-grid__item">
                        <div class="o-text o-text--small">
                          <p><?php the_field('excerpt'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="l-buttons l-buttons--fixed">
                    <p><a class="o-button o-button--wide o-button--rounded" href="<?php the_permalink(); ?>"
                        title="Read more">Read more</a></p>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
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
