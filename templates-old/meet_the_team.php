<?php /* Template Name: Meet the team */ get_header(); ?>

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

  <section class="l-band l-band--overlay-small">
    <div class="l-container l-container--medium">
      <div class="c-content is-center js-team is-center-only">
        <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="o-heading o-heading--large o-heading--inherit"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <section id="content" class="l-band u-padding-bottom--40">
    <div class="l-container l-container--large">

      <?php
		// Load 'team' custom post type
		$posts = get_posts(array(
		'post_type'  => 'team',
		'posts_per_page'  => -1
		));
		if( $posts ):
	?>

      <div class="c-team">

        <div class="c-team__overlay is-closed js-team">
          <div class="u-grid u-grid--align-center u-grid--justify-center">
            <div class="u-grid__item u-grid__item--fixed">
              <div id="team-preview" class="c-team__preview">
                <span class="c-team__preview-hide js-team-close">
                  <i class="c-team__preview-icon fa fa-close" aria-hidden="true"></i>
                </span>
                <div class="c-team__preview-content c-content c-content--border c-content--rounded">
                  <div class="c-team__preview-avatar o-thumbnail">
                    <img
                      class="o-image o-image--circle o-image--shadow o-image--border-small o-image--size-140x140 js-team-avatar"
                      src="" alt="" height="140" width="140" />
                  </div>
                  <h2 class="c-team__preview-name o-heading o-heading--large o-heading--inherit js-team-name">
                  </h2>
                  <h3 class="c-team__preview-role o-heading o-heading--label o-heading--label-dark js-team-role"></h3>
                  <div class="o-text o-text--small">
                    <p class="js-team-bio"></p>
                    <div class="l-buttons js-team-button">
                      <p><a class="o-button o-button--wide o-button--rounded js-team-link" href="#" title=""></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="c-team__list js-team-list">
          <div class="u-grid u-grid--wrap u-grid--justify-center">
            <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
            <div class="u-grid__item u-grid__item--quatre">
              <?php
							$image = get_field('avatar');
							$thumb = $image['sizes']['200x200'];
							$firstName = get_field('first_name');
							$lastName = get_field('last_name');
							$role = get_field('role');
							$excerpt = get_field('excerpt');
							$bio = get_field('bio');
						if( !empty($image) ): ?>
              <a href="#team-preview" class="c-team__member js-team-open" data-name="<?php echo $firstName ?> <?php echo $lastName ?>"
                data-first-name="<?php echo $firstName ?>" data-role="<?php echo $role; ?>"
                data-avatar="<?php echo $thumb; ?>" <?php if($excerpt) { ?>data-bio="<?php echo $excerpt; ?>"
                data-link="<?php the_permalink(); ?>" <?php } else { ?>data-bio="<?php echo $bio; ?>" <?php } endif; ?>>
                <span class="c-team__member-avatar o-thumbnail">
                  <img class="o-image o-image--circle o-image--border-small o-image--shadow o-image--avatar js-lazyload"
                    data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" height="82" width="82" />
                </span>
                <br/>
                <span class="c-team__member-name">
                  <strong><?php the_title() ?></strong>
                </span>
                <br/>
                <span class="c-team__member-role"><?php echo $role; ?></span>
              </a>
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