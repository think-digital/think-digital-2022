<?php /* Template Name: Home */ get_header(); ?>

<!-- <?php if( get_field('') ): ?>
<?php the_field(''); ?>
<?php endif; ?> -->

<main id="main" class="max-w-7xl mx-auto">

  <section id="hero">
    <h1>THINK Digital</h1>
    <p>We are a digital agency that helps non-profit organisations around the world to build and grow their digital
      fundraising and marketing programmes.</p>
    <p>Find out <a href="#">who we are</a> and <a href="#">how we can help</a>.</p>
  </section>

  <section id="services">
    <h2>Services</h2>
    <div class="grid">
      <div class="item">
        <div c;ass="icon">
          <!-- Add SVG here -->
        </div>
        <div class="text">
          <h3>
            <a href="#">Coaching and mentoring</a>
          </h3>
          <p>Jason Potts works with a range of senior leaders across the sector to help them, and their organisations,
            increase their digital fundraising and engagement and become digitally focused.</p>
        </div>
      </div>
      <div class="item">
        <div c;ass="icon">
          <!-- Add SVG here -->
        </div>
        <div class="text">
          <h3>
            <a href="#">Digital culture transformation</a>
          </h3>
          <p>We work with a range of non-profits to help them transform to become digital first organisations, and to
            develop strategies to help them grow their digital fundraising.</p>
        </div>
      </div>
      <div class="item">
        <div c;ass="icon">
          <!-- Add SVG here -->
        </div>
        <div class="text">
          <h3>
            <a href="#">Engagement campaigns</a>
          </h3>
          <p>We help non-profits to deliver engagement campaigns across both recruitment and retention streams. This
            includes: Strategy and planning, Design, build and host, Analytics etc</p>
        </div>
      </div>
      <div class="item">
        <div c;ass="icon">
          <!-- Add SVG here -->
        </div>
        <div class="text">
          <h3>
            <a href="#">Optimisation and analytics</a>
          </h3>
          <p>We carry out digital fundraising optimisation reviews and provide analytics audits and set up to a range of
            non-profits, both in the UK and internationally. </p>
        </div>
      </div>
      <div class="item">
        <div c;ass="icon">
          <!-- Add SVG here -->
        </div>
        <div class="text">
          <h3>
            <a href="#">User research and testing</a>
          </h3>
          <p>We work with non-profits to improve their digital user experience through research and user journey
            testing.
            We present solutions based data and best practices.</p>
        </div>
      </div>
      <div class="item">
        <div c;ass="icon">
          <!-- Add SVG here -->
        </div>
        <div class="text">
          <h3>
            <a href="#">Social listening</a>
          </h3>
          <p>We use one of the leading social listening platforms to analyse what your audiences are talking about, and
            when issues related to your cause are spiking.</p>
        </div>
      </div>
    </div>
    <a href="#">View all services</a>
  </section>

  <section id="projects">
    <h2>Featured case study</h2>
    <div class="grid">
      <div class="item">
        <h3>Paid social recruitment</h3>
        <h4>US office of an INGO</h4>
        <p>Having worked with this organisation on their paid social recruitment for almost a year, we were looking to
          use the learning about creative, audiences and CTAs to help them recruit a high volume of new donors at at
          least a 2.5:1 ROI over year end.</p>
        <p>We ran 11 campaigns from 26 – 31 December across different themes and audiences. All campaigns achieved ROIs
          of over 2.5:1, the highest being 25:1. On 31st December, overall ROI was 50:1.</p>
        <a href="#">Read this case study</a>
      </div>
      <div class="item">
        <img src="#" alt="" />
      </div>
    </div>
    <a href="#">View all case studies</a>
  </section>

  <section id="about">
    <h2>About us</h2>
    <div class="grid">
      <div class="item">
        <p>THINK Digital was founded in 2012 by Jason Potts, who was formerly a Director of THINK Consulting, and who
          has worked in the digital non-profit space for over 20 years. </p>
        <p>We work with non-profit organisations globally to help them build and grow their digital fundraising and
          marketing programmes through a mixture of strategic consultancy and project delivery. </p>
        <ul>
          <li>
            <a href="#">Our story</a>
          </li>
          <li>
            <a href="#">Meet the team</a>
          </li>
        </ul>
      </div>
      <div class="item">
        <!-- Add video here -->
        <p>Jason Potts outlines how we can help your organisation.</p>
      </div>
    </div>
  </section>

  <section id="blog" class="mx-6 xl:mx-0 my-24 relative">
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
    <h2 class="text-2xl lg:text-3xl font-bold text-midnight-500 mb-12">Recent blog posts</h2>
    <div class="grid md:grid-cols-3 gap-12">
      <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
      <div class="pr-6">
        <p class="text-sm lg:text-base font-bold text-slate-500 uppercase mb-4 contains-link">
          <?php the_category( ', ' ); ?></p>
        <?php
					$image = get_field('hero_image');
					$src = $image['sizes']['512x512'];
          $alt = $image['alt'];
					if( !empty($image) ):
        ?>
        <a href="<?php the_permalink(); ?>"
          class="inline-block mb-4 rounded-2xl border border-solid border-slate-200 hover:border-emerald-500 hover:outline hover:outline-1 hover:outline-emerald-500 overflow-hidden">
          <img class="js-lazyload aspect-video object-cover w-64" src="<?php echo $src; ?>"
            data-src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" height="256" width="256" />
        </a>
        <?php endif; ?>
        <h3 class="text-l lg:text-xl lg:leading-8">
          <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="mt-4 text-midnight-400 text-sm lg:text-base">
          <?php echo wp_trim_words( get_the_excerpt(), 28, ' ...' ); ?></p>
        <div class="flex items-center mt-6">
          <div class="avatar mr-4">
            <?php echo get_wp_user_avatar($user_id, 96,'file'); ?>
          </div>
          <div class="text text-xs lg:text-sm">
            <h4 class="font-bold text-midnight-500 contains-link">
              <a href="<?php the_author_url(); ?>"
                title="Find out more about <?php the_author(); ?>"><?php the_author(); ?></a>
            </h4>
            <p class="font-medium text-slate-500"><?php the_date(); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="mt-12 md:absolute md:mt-9 md:top-0 md:right-0">
      <a href="#" class="link text-l">View all blog posts</a>
    </p>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>