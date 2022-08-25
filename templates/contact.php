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
    <div class="grid gap-12 grid-cols-3">
      <div class="col-span-2">
        <?php the_content(); ?>
      </div>
      <div class="">
        <!-- Email -->
        <div class="rounded-xl p-6 bg-slate-100 mb-6">
          <div class="flex space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4 stroke-svg">
            <?php include get_template_directory() . '/assets/email.svg'; ?><span>Email</span>
          </div>
          <a href="#" class="link text-lg" title="Email THINK Digital at contact@thinkds.org">contact@thinkds.org</a>
        </div>
        <!-- Phone -->
        <div class="rounded-xl p-6 bg-slate-100 mb-6">
          <div class="flex	space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4 stroke-svg">
          <?php include get_template_directory() . '/assets/mobile.svg'; ?><span>Phone</span>
          </div>
          <a href="#" class="link text-lg" title="Call or Text THINK Digital on +44 (0)1234 567890">+44 (0)1234 567890</a>
        </div>
        <!-- Twitter -->
        <div class="rounded-xl p-6 bg-slate-100 mb-6">
          <div class="flex	space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4">
          <?php include get_template_directory() . '/assets/twitter.svg'; ?><span>Tweet</span>
          </div>
          <a href="#" class="link text-lg" title="Tweet or Follow @ThinkDigSol on Twitter">@ThinkDigSol</a>
        </div>
        <!-- LinkedIn -->
        <div class="rounded-xl p-6 bg-slate-100 mb-6">
          <div class="flex	space-x-4 svg-icon-6 font-bold text-midnight-400 fill-midnight-400 uppercase mb-4">
          <?php include get_template_directory() . '/assets/linkedin.svg'; ?><span>Connect</span>
          </div>
          <a href="#" class="link text-lg" title="Connect with Think Digital on LinkedIn">Think Digital</a>
        </div>
      </div>
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
        <a href="#" class="link text-lg" title="Email THINK Digital at contact@thinkds.org">contact@thinkds.org</a>
      </div>
      <!-- Phone -->
      <div class="rounded-xl p-6 bg-white">
        <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4 stroke-svg">
        <?php include get_template_directory() . '/assets/mobile.svg'; ?><span>Phone</span>
        </div>
        <a href="#" class="link text-lg" title="Call or Text THINK Digital on +44 (0)1234 567890">+44 (0)1234 567890</a>
      </div>
      <!-- Twitter -->
      <div class="rounded-xl p-6 bg-white">
        <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4">
        <?php include get_template_directory() . '/assets/twitter.svg'; ?><span>Tweet</span>
        </div>
        <a href="#" class="link text-lg" title="Tweet or Follow @ThinkDigSol on Twitter">@ThinkDigSol</a>
      </div>
      <!-- LinkedIn -->
      <div class="rounded-xl p-6 bg-white">
        <div class="flex justify-center	space-x-4 svg-icon-6 font-bold text-emerald-800 fill-emerald-800 uppercase mb-4">
        <?php include get_template_directory() . '/assets/linkedin.svg'; ?><span>Connect</span>
        </div>
        <a href="#" class="link text-lg" title="Connect with Think Digital on LinkedIn">Think Digital</a>
      </div>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>
