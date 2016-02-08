<?php
  get_header();
  echo '<div class="wrapper" id="content">';
  if ( have_posts() ) {
  	while ( have_posts() ) {
  		the_post();
      the_title();
    //  the_content();

  	}
  }
  get_footer();
?>
