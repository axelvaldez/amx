<?php get_header(); ?>
<?php
  $pageslug = strtolower(get_post_type( $post->ID ));
  $markup = 'inc/posts/' . substr_replace($pageslug, '', -1) . '.php';
?>
<main class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <!-- INTRO -->
      <div class="h-entry page-header row">
        <div class="col-12 lead">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php include($markup); ?>
    </div>
  </div>

<?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>