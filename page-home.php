<?php
/**
 * Template Name: Home Page
 */
  get_header();
  $title = get_field('lead_title');
  $text = get_field('lead_text');

  if ( have_posts() ) {
  	while ( have_posts() ) {
  		the_post();
      echo '<section class="lead">';
        echo '<h1>'.$title.'</h1>';
        echo '<p>'.$text.'</p>';
      echo '</section>';
      echo '<hr>';
      echo '<section class="lead">';
        echo '<h1>'.$title.'</h1>';
        echo '<p>'.$text.'</p>';
      echo '</section>';
      //the_content();

  	}
  }
  get_footer();
?>
