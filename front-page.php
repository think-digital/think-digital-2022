<?php /* Template Name: Home */ get_header(); ?>

<!-- <?php if( get_field('') ): ?>
<?php the_field(''); ?>
<?php endif; ?> -->

<main id="main">

  <section id="hero" class="l-band">
    <div class="l-container l-container--extra-large">
      <div class="c-hero c-hero--home">
        <?php
					$image = get_field('intro_image');
					if( !empty($image) ):
					$thumb = $image['sizes']['1400x800'];
        ?>
        <div
          class="c-hero__image c-hero__image--gradient-dark c-hero__image--desktop-crop <?php if( get_field('hero_image_position') ): ?><?php the_field('hero_image_position'); ?><?php endif; ?> js-object-fit">
          <img
            class="c-hero__img c-hero__img--home <?php if( get_field('hero_image_position') ): ?><?php the_field('hero_image_position'); ?><?php endif; ?> js-lazyload"
            data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" />
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="l-band l-band--overlay-medium u-padding-bottom--20">
    <div class="l-container l-container--medium l-container--medium-full">
      <div class="c-content c-content--rounded c-content--dark is-center-only no-margin no-border">
        <h1 class="o-heading is-hidden">THINK Digital</h1>
        <?php if( get_field('intro_label') ): ?>
        <h2 class="o-heading o-heading--label o-heading--label-light">
          <?php the_field('intro_label'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('intro_heading') ): ?>
        <h3 class="o-heading o-heading--large o-heading--inherit"><?php the_field('intro_heading'); ?></h3>
        <?php endif; ?>
        <div class="l-buttons">
          <ul class="o-list o-list--unstyled o-list--buttons u-grid u-grid--gutter-5">
            <?php if( get_field('intro_button_label_#1') ): ?>
            <li class="u-grid__item is-right">
              <a class="o-button o-button--wide o-button--rounded" href="<?php the_field('intro_button_link_#1'); ?>"
                title="<?php the_field('intro_button_label_#1'); ?>"><?php the_field('intro_button_label_#1'); ?></a>
            </li>
            <?php endif; ?>
            <?php if( get_field('intro_button_label_#2') ): ?>
            <li class="u-grid__item is-left">
              <a class="o-button o-button--ghost o-button--wide o-button--rounded"
                href="<?php the_field('intro_button_link_#2'); ?>"
                title="<?php the_field('intro_button_label_#2'); ?>"><?php the_field('intro_button_label_#2'); ?></a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="how-we-can-help" class="l-band u-padding-top--20 u-padding-bottom--20">
    <div class="l-container l-container--large">
      <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-20">
        <div class="u-grid__item">
          <div
            class="c-content c-content--rounded c-content--light c-content--desktop-border is-center-only is-full-height">
            <div class="u-grid u-grid--align-center">
              <div class="u-grid__item">
                <?php
                  $image = get_field('services_image');
                  if( !empty($image) ):
                  $thumb = $image['sizes']['200x200'];
                ?>
                <div class="o-thumbnail">
                  <img
                    class="o-image o-image--circle o-image--border o-image--border-dark o-image--overlay o-image--size-180x180 js-lazyload"
                    data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" height="180" width="180" />
                </div>
                <?php endif; ?>
                <?php if( get_field('services_label') ): ?>
                <h2 class="o-heading o-heading--label o-heading--label-dark"><?php the_field('services_label'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('services_heading') ): ?>
                <h3 class="o-heading o-heading--inherit"><?php the_field('services_heading'); ?></h3>
                <?php endif; ?>
                <?php
                    // Load 'services' custom post type
                    $posts = get_posts(array(
                      'post_type'  => 'services',
                      'posts_per_page'  => -1,
                      'order'   => 'ASC'
                    ));
                    if( $posts ):
                  ?>
                <ul class="o-list o-list--unstyled">
                  <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
                  <li><a class="o-link o-link--highlight" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="u-grid__item">
          <div class="c-content c-content--rounded c-content--border c-content--fixed is-center-only is-full-height">
            <div class="u-grid">
              <div class="u-grid__item">
                <?php
                  $image = get_field('team_image');
                  if( !empty($image) ):
                  $thumb = $image['sizes']['200x200'];
                ?>
                <div class="o-thumbnail">
                  <img
                    class="o-image o-image--circle o-image--border o-image--border-dark o-image--overlay o-image--size-180x180 js-lazyload"
                    data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" height="180" width="180" />
                </div>
                <?php endif; ?>
                <?php if( get_field('team_label') ): ?>
                <h2 class="o-heading o-heading--label o-heading--label-dark"><?php the_field('team_label'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('team_heading') ): ?>
                <h3 class="o-heading o-heading--inherit"><?php the_field('team_heading'); ?></h3>
                <?php endif; ?>
                <?php if( get_field('team_content') ): ?>
                <div class="o-text">
                  <p><?php the_field('team_content'); ?></p>
                </div>
                <?php endif; ?>
                <div class="l-buttons l-buttons--fixed l-buttons--fixed-home">
                  <ul class="o-list o-list--unstyled o-list--buttons u-grid u-grid--gutter-5">
                    <?php if( get_field('team_button_label_#1') ): ?>
                    <li class="u-grid__item">
                      <a class="o-button o-button--full o-button--rounded"
                        href="<?php the_field('team_button_link_#1'); ?>"
                        title="<?php the_field('team_button_label_#1'); ?>"><?php the_field('team_button_label_#1'); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field('team_button_label_#2') ): ?>
                    <li class="u-grid__item">
                      <a class="o-button o-button--ghost o-button--full o-button--rounded"
                        href="<?php the_field('team_button_link_#2'); ?>"
                        title="<?php the_field('team_button_label_#2'); ?>"><?php the_field('team_button_label_#2'); ?></a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="supporting" class="l-band u-padding-top--20 u-padding-bottom--40">
    <div class="l-container l-container--large">
      <div class="u-grid u-grid--wrap u-grid--collapse u-grid--gutter-20">
        <div class="u-grid__item">
          <?php
						// Load 'casestudy' custom post type
						$posts = get_posts(array(
							'post_type'  => 'casestudy',
							'posts_per_page'  => 1,
							'order'   => 'DESC'
						));
						if( $posts ):
					?>
          <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
          <?php
						// Pull select (Option - option)
						$field = get_field_object('client');
						$value = get_field('client');
						$label = $field['choices'][ $value ];
					?>
          <div
            class="c-content c-content--rounded c-content--light c-content--desktop-dark c-content--fixed is-center-only is-full-height"
            data-client="<?php the_field('client'); ?>">
            <div class="u-grid">
              <div class="u-grid__item">
                <?php
							$image = get_field('hero');
							if( !empty($image) ):
							$thumb = $image['sizes']['200x200'];
						?>
                <div class="o-thumbnail">
                  <img
                    class="o-image o-image--circle o-image--border o-image--overlay o-image--size-180x180 js-lazyload"
                    data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" height="180" width="180" />
                </div>
                <?php endif; ?>
                <?php if( get_field('client_label', 43) ): ?>
                <h2 class="o-heading o-heading--label o-heading--label-client"><?php the_field('client_label', 43); ?>
                </h2>
                <?php endif; ?>
                <h3 class="o-heading o-heading--extra-large o-heading--inherit o-heading--reduce-margin">
                  <?php the_title(); ?></h3>
                <h4 class="o-heading o-heading--small o-heading--client"><?php echo $label; ?></h4>
                <?php if( get_field('strapline') ): ?>
                <div class="o-text">
                  <p><?php the_field('strapline'); ?></p>
                </div>
                <?php endif; ?>
                <div class="l-buttons l-buttons--fixed l-buttons--fixed-home">
                  <ul class="o-list o-list--unstyled o-list--buttons u-grid u-grid--gutter-5">
                    <?php if( get_field('client_button_more', 43) ): ?>
                    <li class="u-grid__item">
                      <a class="o-button o-button--full o-button--rounded o-button--client"
                        href="<?php the_permalink(); ?>"
                        title="<?php the_field('client_button_more', 43); ?>"><?php the_field('client_button_more', 43); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field('client_button_label', 43) ): ?>
                    <li class="u-grid__item">
                      <a class="o-button o-button--ghost o-button--full o-button--rounded"
                        href="<?php the_field('client_button_link', 43); ?>"
                        title="<?php the_field('client_button_label', 43); ?>"><?php the_field('client_button_label', 43); ?></a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <div class="u-grid__item">
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
          <div class="c-content c-content--rounded c-content--dark c-content--fixed is-center-only is-full-height"
            style="position: relative;">
            <div class="u-grid">
              <div class="u-grid__item">
                <?php
							$image = get_field('thumbnail');
							$thumb = $image['sizes']['200x200'];
							if( !empty($image) ): ?>
                <div class="o-thumbnail">
                  <img
                    class="o-image o-image--circle o-image--border o-image--overlay o-image--size-180x180 js-lazyload"
                    data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" height="180" width="180" />
                </div>
                <?php endif; ?>
                <?php if( get_field('blog_label', 43) ): ?>
                <h2 class="o-heading o-heading--label o-heading--label-client"><?php the_field('blog_label', 43); ?>
                </h2>
                <?php endif; ?>
                <h3 class="o-heading o-heading--extra-large o-heading--inherit o-heading--reduce-margin">
                  <?php the_title(); ?></h3>
                <h4 class="o-heading o-heading--small o-heading--inherit o-heading--link o-heading--increase-margin">
                  <em>by</em> <?php the_author_link(); ?></h4>
                <div class="o-text">
                  <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                </div>
                <div class="l-buttons l-buttons--fixed l-buttons--fixed-home">
                  <ul class="o-list o-list--unstyled o-list--buttons u-grid u-grid--gutter-5">
                    <?php if( get_field('blog_button_more', 43) ): ?>
                    <li class="u-grid__item">
                      <a class="o-button o-button--full o-button--rounded" href="<?php the_permalink(); ?>"
                        title="<?php the_field('blog_button_more', 43); ?>"><?php the_field('blog_button_more', 43); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field('blog_button_label', 43) ): ?>
                    <li class="u-grid__item">
                      <a class="o-button o-button--ghost o-button--full o-button--rounded"
                        href="<?php the_field('blog_button_link', 43); ?>"
                        title="<?php the_field('blog_button_label', 43); ?>"><?php the_field('blog_button_label', 43); ?></a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>