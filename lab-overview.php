<?php
/**
 * Template Name: Lab Übersicht
 */
get_header();
?>

<?php
while ( have_posts() ) :
the_post();
get_template_part( 'template-parts/header-alpaka', get_post_type() );
?>

<section class="c-blog-list is-grid pt-10">
  <?php
  $args = array('post_type' => 'lab',
                'posts_per_page' => -1);
  $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>
    <ul class="">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php
        get_template_part( 'template-parts/children', 'lab' ); ?>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  <?php endif; ?>
</section>

<?php get_template_part('template-parts/partner', 'lab') ?>

<?php
endwhile;


get_footer();
