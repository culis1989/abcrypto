<?php
/**
 * Template Name: Home Page
 */
  get_header();

  $title = get_field('lead_title');
  $text = get_field('lead_text');
  $lead_image = get_field('lead_image');
  $boxes = get_field('box');


  if ( have_posts() ) {
  	while ( have_posts() ) {
  		the_post();

      echo '<div class="lead_background_box" style="background-image:url('.$lead_image.');">';
        echo '<div class="lead_cover">';
          echo '<div class="wrapper" id="content">';
            echo '<section class="lead">';
              echo '<h1>'.$title.'</h1>';
              echo '<p>'.$text.'</p>';
            echo '</section>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
      //the_content();



      echo '<section class="home-box as_content">';
        echo '<div class="wrapper">';
          echo '<div class="fluid">';
      foreach ($boxes as $box) {


              echo '<div class="grid4">';
                echo '<h2>'.$box['lead_text'].'</h2>';
                echo '<p>'.$box['content'].'</p>';
                echo '<a class="button orange" href="'.$box['button_link'].'">';
                echo $box['button_text'].'</a>';
              echo '</div>';

      }
      echo '</div>';
    echo '</div>';
  echo '</section>';
  	}
  }
  echo '</div>';
  get_footer();
?>
