<?php /* Template Name: Home */ get_header(); ?>

<?php if( get_field('') ): ?>
<?php the_field(''); ?>
<?php endif; ?>

<main id="main">

  <?php include get_template_directory() . '/inc/services.php'; ?>

  <?php include get_template_directory() . '/inc/project-random.php'; ?>

  <section id="about" class="max-w-7xl mx-auto px-6 pt-12 pb-24">
    <div class="relative">
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-12">About us</h2>
      <div class="lg:flex lg:space-x-24 lg:items-center">
        <div class="item mb-8 lg:mb-0">
          <!-- <video class="aspect-video rounded-2xl w-full object-cover" width="320" height="240" poster="<?php echo get_template_directory_uri(); ?>/assets/about-jason.jpeg" controls>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video> -->
          <img class="js-lazyload aspect-video rounded-2xl w-full object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/about-jason.jpeg" alt="Jason Potts outlines how we can help your organisation." width="320" height="240" />
          <p class="flex space-x-2 svg-icon-4 text-sm opacity-80 mt-4 text-slate-600 items-start">
            <?php include get_template_directory() . '/assets/comment.svg'; ?><span>Jason Potts outlines how we can help your organisation.</span></p>
        </div>
        <div class="item max-w-lg text-midnight-500 text-lg lg:text-xl pb-9">
          <p class="font-medium mb-6">THINK Digital was founded in 2012 by Jason Potts, who was formerly a Director of THINK Consulting, and who has worked in the digital non-profit space for over 20 years. </p>
          <p class="mb-6 text-midnight-400">We work with non-profit organisations globally to help them build and grow their digital fundraising and marketing programmes through a mixture of strategic consultancy and project delivery. </p>
          <ul class="flex space-x-6 text-midnight-500">
            <li>
              <a href="/about" class="link">Our story</a>
            </li>
            <li>
              <a href="/about/team" class="link">Meet the team</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="blog" class="max-w-7xl mx-auto px-6 pt-12 pb-24">
    <div class="relative">
      <?php
        // Load 'posts' custom post type
        $posts = get_posts(array(
        'post_type'  => 'post',
        'posts_per_page'  => 3,
        'order'   => 'ASC'
        ));
        if( $posts ):
      ?>
      <hr class="w-24	border-4 border-emerald-200 mb-4" />
      <h2 class="text-3xl font-bold text-midnight-500 mb-12">Recent blog posts</h2>
      <div class="grid md:grid-cols-3 gap-12">
        <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
        <div class="pr-6">
          <hr class="w-12	border-2 border-slate-100 mb-4" />
          <p class="font-bold uppercase mb-4 text-slate-500 contains-link"><?php the_category( ', ' ); ?></p>
          <?php
            $image = get_field('hero_image');
            $src = $image['sizes']['512x512'];
            $alt = $image['alt'];
            if( !empty($image) ):
          ?>
          <a href="<?php the_permalink(); ?>" class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-2 hover:outline-emerald-500 overflow-hidden">
            <img class="js-lazyload aspect-video object-cover w-64" data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="256" width="256" />
          </a>
          <?php endif; ?>
          <h3 class="text-xl leading-relaxed text-midnight-500">
            <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <p class="mt-4 text-midnight-400 leading-relaxed">
            <?php the_field('excerpt'); ?>
          </p>
          <div class="flex items-center mt-6">
            <div class="avatar mr-4">
              <a href="/about/team/<?php the_author_meta('nickname'); ?>" title="Find out more about <?php the_author(); ?>">
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
        <?php endforeach; ?>
      </div>
      <p class="mt-12 md:absolute md:mt-9 md:top-0 md:right-0 text-midnight-500">
        <a href="/blog" class="link text-l">View all blog posts</a>
      </p>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <?php include get_template_directory() . '/inc/contact.php'; ?>

</main>

<?php get_footer(); ?>
