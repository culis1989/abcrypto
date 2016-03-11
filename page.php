<?php
  get_header();
  echo '<div class="wrapper" id="content">';
    echo '<div class="fluid">';
      echo '<div class="grid9">';
      if ( have_posts() ) {
      	while ( have_posts() ) {
      		the_post();

          $title = get_the_title();

          echo '<h1>'.$title.'</h1>';
          the_content();

      	}
      }
      echo '</div>';
      echo '<aside class="grid3">';
        get_sidebar();
        echo '</aside>';
      echo '</div>';
    echo '</div>';

  get_footer();
?>
