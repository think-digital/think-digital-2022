<?php /* Template Name: Blog */ get_header(); ?>

<main id="main" role="main">

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

  <?php
				// Load 'services' custom post type
				$posts = get_posts(array(
				'post_type'  => 'post',
				'posts_per_page'  => 1,
				'order'   => 'ASC'
				));
				if( $posts ):
			?>
  <?php foreach( $posts as $post ): setup_postdata( $post ) ?>

  <section class="l-band l-band--overlay u-padding-bottom--20">
    <div class="l-container l-container--medium l-container--medium-full">
      <div class="c-content c-content--rounded c-content--dark is-center">
        <h1 class="o-heading o-heading--extra-large o-heading--inherit">Latest thinking</h1>
      </div>
      <div class="c-content c-content--rounded c-content--border">
        <h4 class="o-heading o-heading--label o-heading--label-client"><?php the_date(); ?></h4>
        <h2 class="o-heading o-heading--large o-heading--inherit o-heading--reduce-margin"><?php the_title(); ?></h2>
        <h3 class="o-heading o-heading--small o-heading--inherit o-heading--link o-heading--increase-margin"><em>by</em>
          <?php the_author_link(); ?></h3>
        <div class="o-text">
          <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
          <div class="l-buttons">
            <div class="u-grid u-grid--gutter-5">
              <div class="u-grid__item">
                <a class="o-button o-button--full o-button--rounded" href="<?php the_permalink(); ?>"
                  title="Read more">Read
                  more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>

  <section id="content" class="l-band u-padding-bottom--20">
    <div class="l-container l-container--large">

      <?php
		// Load 'services' custom post type
		$posts = get_posts(array(
		'post_type'  => 'post',
		'posts_per_page'  => -1,
		'order'   => 'ASC'
		));
		if( $posts ):
	?>

      <div class="c-accordian">
        <div class="c-accordian__list c-accordian__list--posts">
          <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-20">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <div class="u-grid__item u-grid__item--half">
              <div class="c-accordian__item c-accordian__item--rounded c-accordian__item--fixed">
                <div class="c-accordian__heading c-accordian__heading--post js-accordian">
                  <h4
                    class="o-heading o-heading--label o-heading--label-post o-heading--label-client o-heading--reduce-margin">
                    <?php the_date(); ?></h4>
                  <h2 class="o-heading o-heading--post o-heading--inherit"><?php the_title(); ?></h2>
                </div>
                <div class="c-accordian__panel c-accordian__panel--fixed">
                  <div class="c-accordian__content c-accordian__content--post">
                    <div class="u-grid u-grid--wrap u-grid--align-center u-grid--justify-center">
                      <div class="u-grid__item">
                        <h3
                          class="o-heading o-heading--small o-heading--inherit o-heading--link o-heading--increase-margin">
                          <em>by</em> <?php the_author_link(); ?></h3>
                        <div class="o-text o-text--small">
                          <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="l-buttons l-buttons--fixed">
                    <p><a class="o-button o-button--full o-button--rounded" href="<?php the_permalink(); ?>"
                        title="Read more">Read more</a></p>
                  </div>
                </div>
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