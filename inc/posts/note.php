<article class="h-entry post <?php if (is_single()){ echo('single'); }?> note row">
  <div class="col-lg-3">
    <p class="date">
    <a class="u-url muted" href="<?php the_permalink(); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none"><path d="M15.8 5.7C15.8 3.6 14.1 1.8 12 1.7V0.8C12 0.4 11.6 0 11.2 0 10.7 0 10.4 0.4 10.4 0.8V1.6H5.5V0.8C5.5 0.4 5.1 0 4.6 0 4.2 0 3.8 0.4 3.8 0.8V1.7C1.7 1.8 0 3.6 0 5.7V13.9C0 16.2 1.8 18 4.1 18H11.7C14 18 15.8 16.2 15.8 13.9V5.7ZM3.8 3.3V4.1C3.8 4.6 4.2 4.9 4.6 4.9 5.1 4.9 5.5 4.6 5.5 4.1V3.3H10.4V4.1C10.4 4.6 10.7 4.9 11.2 4.9 11.6 4.9 12 4.6 12 4.1V3.3C13.2 3.4 14.2 4.5 14.2 5.7V6.5H1.6V5.7C1.6 4.5 2.6 3.4 3.8 3.3ZM11.7 16.4H4.1C2.7 16.4 1.6 15.3 1.6 13.9V8.2H14.2V13.9C14.2 15.3 13.1 16.4 11.7 16.4Z" /></svg>
        <time class="dt-published" datetime="<?php the_time( 'c' ); ?>"><?php the_time(); ?></time>
      </a>
    </p>
  </div>
  <div class="col-lg-9">
    <?php if (!is_single()){ ?>
      <h2 class="p-name post-title mt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php } ?>
    <div class="e-content">
      <?php the_content('Read More &rarr;'); ?>
    </div>
  </div>
</article>