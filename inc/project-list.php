<section id="projects" class="max-w-5xl mx-auto px-6 mb-24">
  <div class="relative">
    <?php
      // Load 'posts' custom post type
      $posts = get_posts(array(
      'post_type'  => 'casestudy',
      'order'   => 'ASC',
      'offset' => 1,
      'exclude' => get_the_ID(),
      ));
      if( $posts ):
    ?>
    <div class="grid gap-y-16 md:gap-y-24 mt-12 mb-6 md:mt-0 md:mb-0">
      <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
      <div class="post grid md:grid-cols-5 lg:gap-x-16 gap-y-4 md:gap-y-24">
        <?php
            $image = get_field('hero');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
          <div class="image md:place-self-start col-span-5 md:col-span-2">
          <hr class="w-24	border-4 border-emerald-200 mb-9 md:hidden" />
            <a href="<?php the_permalink(); ?>?href=image" class="inline-block rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
              <span class="aspect-video md:aspect-orginal relative w-64 lg:w-full">
                <img class="js-lazyload object-cover w-full h-full" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="512" width="512" />
              </span>
            </a>
          </div>
        <?php endif; ?>
        <div class="content col-span-5 md:col-span-3">
          <hr class="w-24	border-4 border-emerald-200 mb-9 hidden md:block" />
          <h3 class="font-bold text-2xl text-midnight-500 mb-2"><?php the_title(); ?></h3>
          <h4 class="font-bold uppercase mb-4 text-lg text-emerald-800"><?php the_field('client'); ?></h4>
          <div class="content-post mt-4 mb-6 text-midnight-400 leading-relaxed">
            <?php the_field('excerpt'); ?>
          </div>
          <p><a class="link text-midnight-500 text-lg" href="<?php the_permalink(); ?>?href=title" title='Read "<?php the_title(); ?>" case study'>Read this case study</a></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-l mt-6 md:mt-12 md:absolute md:top-0 md:right-0 text-midnight-500 md:hidden">
      <a href="/case-studies" class="link">View all case studies</a>
    </p>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</section>
