<?php
  get_header();

  $cat_name = single_cat_title('', false);
  $cat_description = category_description();
  $queried_object = get_queried_object();
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;
  $image = get_field('image', $taxonomy . '_' . $term_id);


  echo '<div class="wrapper" id="content">';
  echo '<div class="fluid">';
  echo '<div class="grid9">';
  if ( have_posts() ) {
    echo '<ul class="category">';
  	while ( have_posts() ) {
    	the_post();

      echo '<li>';

        echo '<div class="fluid">';

        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $link = get_permalink();
        $tags = get_the_tags();
        $date = get_the_date();
        $author = get_the_author_firstname().' '.get_the_author_lastname();

        if ( has_post_thumbnail() ) {
          echo '<div class="grid4">';
          $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          echo '<img src="'.$feat_image.'" alt="'.$title.'"/>';
          echo '</div>';
          echo '<div class="grid8">';
        }else{
          echo '<div class="grid12">';
        }


        if($tags){
          echo '<div class="tags">';
          foreach ($tags as $tag) {
            echo '<a href="/tag/'.$tag->slug.'">'.$tag->name.'</a> / ';
          }
          echo '</div>';
        }
        echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
        echo '<div class="date">Author: <b>'.$author.'</b> / Date: '.$date.'</div>';

        echo '<p>'.$excerpt.'</p>';
        echo '<a class="button orange" href="'.$link.'">READ MORE</a>';
        echo '<div class="clear"></div>';
        echo '</div>';
        echo '</div>';
      echo '</li>';
  	}
    echo '</ul>';
  }
  echo '</div>';
  echo '<aside class="grid3">';
    get_sidebar();
  echo '</aside>';
  echo '</div>';
  echo '</div>';
  get_footer();
?>
