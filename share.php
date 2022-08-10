<ul class="flex space-x-6">
  <li>
    <a class="share-link facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url(the_permalink()); ?>" title="Share on Facebook"><?php include get_template_directory() . '/assets/facebook.svg'; ?></a>
  </li>
  <li>
    <a class="share-link twitter" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php esc_url(the_permalink()); ?> @ThinkDigSol" title="Share on Twitter"><?php include get_template_directory() . '/assets/twitter.svg'; ?></a>
  </li>
  <li>
    <a class="share-link linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php esc_url(the_permalink()); ?>" title="Share on LinkedIn"><?php include get_template_directory() . '/assets/linkedin.svg'; ?></a>
  </li>
  <li>
    <a class="share-link whatsapp" href="https://api.whatsapp.com/send?text=<?php the_title(); ?> <?php esc_url(the_permalink()); ?> @ThinkDigSol" data-action="share/whatsapp/share" title="Share on WhatsApp"><?php include get_template_directory() . '/assets/whatsapp.svg'; ?></a>
  </li>
</ul>
