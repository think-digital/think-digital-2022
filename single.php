<?php /* Single posts */ get_header(); ?>

<main id="main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

  <section id="hero" class="l-band">
    <div class="l-container l-container--extra-large">
      <div class="c-hero">
        <?php
					$image = get_field('thumbnail');
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

  <section class="l-band l-band--overlay u-padding-bottom--20">
    <div class="l-container l-container--medium l-container--medium-full">
      <div class="c-content c-content--rounded c-content--dark is-center">
        <h3 class="o-heading o-heading--label o-heading--label-light"><?php the_date(); ?></h3>
        <h1 class="o-heading o-heading--large o-heading--inherit"><?php the_title(); ?></h1>
        <h2 class="o-heading o-heading--small o-heading--inherit o-heading--link o-heading--increase-margin">
          <em>by</em> <?php the_author_link(); ?>
        </h2>
      </div>
      <div class="c-content c-content--rounded c-content--border">
        <div class="o-text">
          <?php the_content(); ?>
        </div><br />
        <div class="c-share">
          <h4 class="o-heading o-heading--small">Share this post</h4>
          <ul class="u-grid u-grid--inline u-grid--list u-grid--gutter-5">
            <li class="u-grid__item u-grid__item--auto">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url(the_permalink()); ?>"
                class="o-button o-button--circle o-button--facebook" target="_blank" title="Share on Facebook"><i
                  class="fa fa-facebook" aria-label="Facebook" aria-hidden="true"></i><span class="is-hidden">Share on
                  Facebook</span></a>
            </li>
            <li class="u-grid__item u-grid__item--auto">
              <a href='https://twitter.com/intent/tweet?text=I just read "<?php the_title(); ?>" by <?php the_author(); ?> at <?php esc_url(the_permalink()); ?> @ThinkDigSol'
                class="o-button o-button--circle o-button--twitter" target="_blank" title="Share on Twitter"><i
                  class="fa fa-twitter" aria-label="Twitter"></i><span class="is-hidden">Share on Twitter</span></a>
            </li>
            <li class="u-grid__item u-grid__item--auto">
              <a href='https://api.whatsapp.com/send?text= "I just read <?php the_title(); ?>" by <?php the_author(); ?> at <?php esc_url(the_permalink()); ?>'
                data-action="share/whatsapp/share" class="o-button o-button--circle o-button--whatsapp" target="_blank"
                title="Share on WhatsApp"><i class="fa fa-whatsapp" aria-label="WhatsApp"></i><span
                  class="is-hidden">Share on WhatsApp</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>

  <section class="l-band u-padding-bottom--20">
    <div class="l-container l-container--large">

      <?php
				// Load 'services' custom post type
				$posts = get_posts(array(
				'post_type'  => 'post',
				'posts_per_page'  => 4,
				'order'   => 'ASC'
				));
				if( $posts ):
			?>

      <div class="c-content is-center">
        <h2 class="o-heading">More of our thinking</h2>
      </div>

      <div class="c-accordian">
        <div class="c-accordian__list">
          <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-20">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <div class="u-grid__item u-grid__item--half">
              <div class="c-accordian__item c-accordian__item--rounded c-accordian__item--fixed">
                <div class="c-accordian__heading c-accordian__heading--post js-accordian">
                  <h5
                    class="o-heading o-heading--label o-heading--label-post o-heading--label-client o-heading--reduce-margin">
                    <?php the_date(); ?></h5>
                  <h3 class="o-heading o-heading--post o-heading--inherit"><?php the_title(); ?></h3>
                </div>
                <div class="c-accordian__panel c-accordian__panel--fixed">
                  <div class="c-accordian__content c-accordian__content--post">
                    <div class="u-grid u-grid--wrap u-grid--align-center u-grid--justify-center">
                      <div class="u-grid__item">
                        <h4
                          class="o-heading o-heading--small o-heading--inherit o-heading--link o-heading--increase-margin">
                          <em>by</em> <?php the_author_link(); ?>
                        </h4>
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