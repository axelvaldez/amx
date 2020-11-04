<?php get_header(); ?>

<main class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <!-- INTRO -->
      <article class="h-entry page-header row">
        <div class="col-12 lead">
          <h1><?php the_title(); ?></h1>
          <p>This is my <a href="https://nownownow.com/">now page</a>, where I share what I’m currently up to, the stuff I’m making and consuming, and in general everything that’s going on.</p>
        </div>
      </article>
      <hr>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="h-entry post note row">
            <div class="col-lg-3">
              <p class="muted">Last updated:<br><?php the_modified_date(); ?></p>
            </div>
            <div class="col-lg-9">
              <div class="e-content">
                <?php the_content(); ?>
              </div>
            </div>
          </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>

    </div>
  </div>
</main>
<?php get_footer(); ?>




