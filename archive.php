<?php get_header(); ?>
<?php
  $pagetitle = strip_tags(str_replace('Archives: ','',get_the_archive_title()));
  $pageslug = strtolower($pagetitle);
  $pageurl = get_bloginfo('url') . '/' . $pageslug . '/';
  $pagedescription = strip_tags(get_field( $pageslug . '_desc', 'options'));
  $markup = 'inc/posts/' . substr_replace($pageslug, '', -1) . '.php';
?>
<main class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <!-- INTRO -->
      <div class="page-header row">
        <div class="col-12 lead">
          <h1><?php echo $pagetitle; ?></h1>
          <?php echo $pagedescription; ?>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php 
        if (is_post_type_archive('photos')){
          echo ('<div class="row">');
        }
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          include($markup);
          echo('<hr>');
          endwhile;
          include('inc/pagination.php');
        else :
      ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif;
        if (is_archive('photos')){
          echo ('</div>');
        }
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>