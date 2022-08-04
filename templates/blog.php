<?php /* Template Name: Blog */ get_header(); ?>

<main id="main">

<section id="blog" class="max-w-5xl mx-auto px-6 pt-12 pb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'post',
        'posts_per_page'  => 5,
        'order'   => 'ASC'
        ));
        if( $posts ):
      ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-3xl font-bold text-midnight-500 mb-12">Recent blog posts</h2>
      <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <hr class="w-12	border-2 border-slate-100 mb-4" />
        <div class="grid md:grid-cols-2 gap-12">
          <div class="content">
            <p class="font-bold uppercase mb-4 text-slate-500 contains-link"><?php the_category( ', ' ); ?></p>
            <h3 class="text-xl leading-relaxed">
              <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="mt-4 text-midnight-400 leading-relaxed">
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
                  <a href="<?php the_author_url(); ?>" title="Find out more about <?php the_author(); ?>"><?php the_author(); ?></a>
                </h4>
                <p class="font-medium text-slate-500"><?php the_date(); ?></p>
              </div>
            </div>
          </div>
          <?php
              $image = get_field('hero_image');
              $src = $image['sizes']['512x512'];
              $alt = $image['alt'];
              if( !empty($image) ):
            ?>
          <div class="image place-self-center">
            <a href="<?php the_permalink(); ?>" class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
              <img class="js-lazyload aspect-video object-cover w-80" src="<?php echo $src; ?>" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="320" width="320" />
            </a>
          </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
      <p class="mt-12 md:absolute md:mt-9 md:top-0 md:right-0">
        <a href="#" class="link text-l">View all blog posts</a>
      </p>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <section id="contact" class="max-w-7xl mx-auto py-16 px-32 mb-24 rounded-2xl bg-emerald-200 text-center">
    <div class="relative">
      <h2 class="text-2xl lg:text-3xl font-bold text-emerald-900 mb-6">Contact us</h2>
      <p class="text-2xl max-w-3xl mx-auto text-emerald-900 mb-12">If you’d like to find out more about what we do and how we might be able to help your organisation, please contact us at:</p>
      <div class="grid gap-6 grid-cols-4">
        <!-- Email -->
        <div class="rounded-xl p-6 bg-white">
          <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4 stroke-svg">
            <?php include get_template_directory() . '/assets/email.svg'; ?><span>Email</span>
          </div>
          <a href="#" class="link text-lg">contact@thinkds.org</a>
        </div>
        <!-- Phone -->
        <div class="rounded-xl p-6 bg-white">
          <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4 stroke-svg">
          <?php include get_template_directory() . '/assets/mobile.svg'; ?><span>Phone</span>
          </div>
          <a href="#" class="link text-lg">+44 (0)1234 567890</a>
        </div>
        <!-- Twitter -->
        <div class="rounded-xl p-6 bg-white">
          <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4">
          <?php include get_template_directory() . '/assets/twitter.svg'; ?><span>Tweet</span>
          </div>
          <a href="#" class="link text-lg">@ThinkDigSol</a>
        </div>
        <!-- LinkedIn -->
        <div class="rounded-xl p-6 bg-white">
          <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4">
          <?php include get_template_directory() . '/assets/linkedin.svg'; ?><span>Connect</span>
          </div>
          <a href="#" class="link text-lg">Think Digital</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
