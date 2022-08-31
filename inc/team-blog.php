<section id="blog" class="max-w-5xl mx-auto px-6 pb-12">
  <div class="relative">
    <?php
      $authorID = get_field('related_post');
      $authorFirstName = get_field('first_name');
      if( $authorID != 0):
    ?>
    <?php
      // Load 'posts' custom post type
      $posts = get_posts(array(
      'post_type' => 'post',
      'posts_per_page' => 1,
      'order' => 'ASC',
      'exclude' => get_the_ID(),
      'author'  =>  $authorID,
		  'post_parent' => 'blog'
      ));
      if( $posts ):
    ?>
    <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
      <?php if ( get_the_date( 'U' ) > strtotime( '-1 year' ) ): ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-12">Recent blog posts</h2>
      <p class="font-bold uppercase mb-4 lg:text-lg text-slate-500 contains-link"><?php the_category( ', ' ); ?></p>
      <div class="md:grid md:grid-cols-5 md:gap-16 md:mb-24">
        <?php
            $image = get_field('hero_image');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
        <div class="image place-self-start col-span-2 md:order-2">
          <a href="<?php the_permalink(); ?>" class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
            <img class="js-lazyload aspect-video object-cover w-64 lg:w-full" src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="320" width="320" />
          </a>
        </div>
        <?php endif; ?>
        <div class="content col-span-3 md:order-1">
          <h3 class="text-xl lg:text-2xl leading-relaxed text-midnight-500">
            <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <p class="mt-4 pr-4 lg:pr-0 text-midnight-400 leading-relaxed">
            <?php the_field('excerpt'); ?>
          </p>
          <div class="flex items-center mt-6">
            <div class="avatar mr-4">
              <a href="<?php the_author_url(); ?>" title="Find out more about <?php the_author(); ?>">
                <?php echo get_wp_user_avatar($user_id, 96,'file'); ?>
              </a>
            </div>
            <div class="text text-sm">
              <h4 class="font-bold text-midnight-500 contains-link">
                <a href="/about/team/<?php the_author_meta('nickname'); ?>" title="Find out more about <?php the_author(); ?>"><?php the_author(); ?></a>
              </h4>
              <p class="font-medium text-slate-500"><?php the_date(); ?></p>
            </div>
          </div>
        </div>
      </div>
      <p class="text-midnight-500 mt-12 md:absolute md:mt-9 md:top-0 md:right-0">
        <a href="/blog" class="link text-l">View all blog posts</a>
      </p>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</section>
