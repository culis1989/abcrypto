<?php
  get_header();




  echo '<div class="wrapper single-post" id="content">';
  echo '<div class="fluid">';
    echo '<div class="grid9">';
    if ( have_posts() ) {
    	while ( have_posts() ) {
    		the_post();

        $title = get_the_title();
        $tags = get_the_tags();
        $date = get_the_date();
        $author = get_the_author_firstname().' '.get_the_author_lastname();

        if ( has_post_thumbnail() ) {
          $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          echo '<img src="'.$feat_image.'" alt="'.$title.'" class="single-post-featured"/>';

        }

        if($tags){
          echo '<div class="tags">';
          foreach ($tags as $tag) {
            echo '<a href="/tag/'.$tag->slug.'">'.$tag->name.'</a> / ';
          }
          echo '</div>';
        }
        echo '<h1>'.$title.'</h1>';
        echo '<div class="date">Author: <b>'.$author.'</b> / Date: '.$date.'</div>';

        the_content();

    	}
    }
    echo '</div>';
  echo '<aside class="grid3">';
    get_sidebar();
  echo '</div>';
  echo '</div>';
  get_footer();
?>
