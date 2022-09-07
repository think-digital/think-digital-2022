<ul class="flex mt-6 space-x-6 items-center">
  <?php if(get_field('email')): ?>
    <li>
      <a class="share-link email" href="mailto:<?php the_field('email'); ?>" title="Email <?php echo the_title(); ?>">
        <?php include get_template_directory() . '/assets/email.svg'; ?>
      </a>
    </li>
  <?php endif ;?>
  <?php if(get_field('twitter')): ?>
    <li>
      <a class="share-link twitter" href="http://twitter.com/<?php the_field('twitter'); ?>" title="Tweet or Follow <?php the_field('twitter'); ?> on Twitter">
        <?php include get_template_directory() . '/assets/twitter.svg'; ?>
      </a>
    </li>
  <?php endif ;?>
  <?php if(get_field('linkedin')): ?>
    <li>
      <a class="share-link linkedin" href="http://linkedin.com/<?php the_field('linkedin'); ?>" title="Connect with <?php echo the_title(); ?> on LinkedIn">
        <?php include get_template_directory() . '/assets/linkedin.svg'; ?>
      </a>
    </li>
  <?php endif ;?>
</ul>
