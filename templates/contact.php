<?php /* Template Name: Contact */ get_header(); ?>

<main id="main">

  <section id="intro" class="content-intro pb-8">
    <ul class="breadcrumbs">
      <li class="parent"><a href="/">Home</a></li>
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1>Contact us</h1>
    <p><?php the_field('excerpt'); ?></p>
  </section>

  <section id="content" class="content-cms max-w-4xl mx-auto pt-4 pb-24 px-6">
    <div class="grid lg:gap-12 lg:grid-cols-3">
      <div class="lg:order-2 mb-12 grid gap-6 md:grid-cols-2 lg:grid-cols-1">
        <!-- Email -->
        <div class="rounded-xl p-6 bg-slate-100">
          <div class="flex space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4 stroke-svg">
            <?php include get_template_directory() . '/assets/email.svg'; ?><span>Email</span>
          </div>
          <a href="mailto:contact@thinkds.org" class="link text-lg break-words" title="Email THINK Digital at contact@thinkds.org">contact@thinkds.org</a>
        </div>
        <!-- Phone -->
        <div class="rounded-xl p-6 bg-slate-100">
          <div class="flex	space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4 stroke-svg">
          <?php include get_template_directory() . '/assets/mobile.svg'; ?><span>Phone</span>
          </div>
          <a href="tel:+44(0)1234567890" class="link text-lg break-words" title="Call or Text THINK Digital on +44 (0)1234 567890">+44 (0)1234 567890</a>
        </div>
        <!-- Twitter -->
        <div class="rounded-xl p-6 bg-slate-100">
          <div class="flex	space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4">
          <?php include get_template_directory() . '/assets/twitter.svg'; ?><span>Tweet</span>
          </div>
          <a href="https://twitter.com/ThinkDigSol" target="_blank" class="link text-lg break-words" title="Tweet or Follow @ThinkDigSol on Twitter">@ThinkDigSol</a>
        </div>
        <!-- LinkedIn -->
        <div class="rounded-xl p-6 bg-slate-100">
          <div class="flex	space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4">
          <?php include get_template_directory() . '/assets/linkedin.svg'; ?><span>Connect</span>
          </div>
          <a href="https://www.linkedin.com/company/think-digital---consultancy/" target="_blank" class="link text-lg break-words" title="Connect with Think Digital on LinkedIn">Think Digital</a>
        </div>
      </div>
      <div class="lg:order-1 lg:col-span-2">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
