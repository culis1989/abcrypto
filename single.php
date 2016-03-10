<?php
  get_header();

  $queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;

	$categories = get_the_category();
	$term_id = $queried_object->term_id;
	$category_id = $categories[0]->cat_ID;
	$category_name = $categories[0]->cat_name;
	$category_link = get_category_link( $category_id );
	$image_src = get_field('image', 'category_'. $category_id);

  $title = get_the_title();

  echo '<div class="lead_header" style="background-image:url('.$image_src.')">';
    echo '<div class="lead_cover">';
      echo '<div class="wrapper">';
          echo '<h1>'.$title.'</h1>';
          echo $cat_description;
        echo '</div>';
    echo '</div>';
  echo '</div>';

  echo '<div class="wrapper" id="content">';
  if ( have_posts() ) {
  	while ( have_posts() ) {
  		the_post();
      the_content();

  	}
  }
  get_footer();
?>
