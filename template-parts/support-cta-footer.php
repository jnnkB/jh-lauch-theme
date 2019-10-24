<div class="c-footer-support">
  <div class="support-illustration">
    <?php get_template_part('images/illustrations', 'freundeskreis.svg' ); ?>
  </div>
  <div class="support-cta">
    <div>
      <?php echo explode(PHP_EOL, get_theme_mod('support_copy', 'foo'))[0]; ?>
      <p>
        <a href="<?php echo get_theme_mod('support_link', 'https://freundeskreis.jugendhackt.org'); ?>"
           class="support-link--red">
          <?php echo __('Jetzt unterstützen!', 'lauch'); ?>
          <?php echo render_svg('/images/arrow-external-red.svg'); ?></a>
      </p>
    </div>
  </div>
</div>
