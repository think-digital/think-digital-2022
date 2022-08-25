<ul class="flex mt-6 space-x-6 items-center">
  <?php if(get_field('email')): ?>
    <li>
      <a class="share-link email" href="mailto:<?php the_field('email'); ?>">
        <?php include get_template_directory() . '/assets/email.svg'; ?>
      </a>
    </li>
  <?php endif ;?>
  <?php if(get_field('twitter')): ?>
    <li>
      <a class="share-link twitter" href="http://twitter.com/<?php the_field('twitter'); ?>">
        <?php include get_template_directory() . '/assets/twitter.svg'; ?>
      </a>
    </li>
  <?php endif ;?>
  <?php if(get_field('linkedin')): ?>
    <li>
      <a class="share-link linkedin" href="http://linkedin.com/<?php the_field('linkedin'); ?>">
        <?php include get_template_directory() . '/assets/linkedin.svg'; ?>
      </a>
    </li>
  <?php endif ;?>
</ul>
