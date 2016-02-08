<?php
  get_header();

  $cat_name = single_cat_title('', false);
  $cat_description = category_description();
  $queried_object = get_queried_object();
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;
  $image = get_field('image', $taxonomy . '_' . $term_id);

  echo '<div class="lead_header" style="background-image:url('.$image.')">';
    echo '<div class="lead_cover">';
      echo '<div class="wrapper">';
          echo '<h1>'.$cat_name.'</h1>';
          echo $cat_description;
        echo '</div>';
    echo '</div>';
  echo '</div>';

  echo '<div class="wrapper" id="content">';
  if ( have_posts() ) {
    echo '<ul>';
  	while ( have_posts() ) {
    	the_post();

      echo '<li>';
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $link = get_permalink();
        $tags = get_the_tags();
        $date = get_the_date();

        echo '<div class="date">'.$date.'</div>';
        echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
        if($tags){
          echo '<div class="tags">';
          foreach ($tags as $tag) {
            echo '<a href="/tag/'.$tag->slug.'">'.$tag->name.'</a> / ';
          }
          echo '</div>';
        }
        echo '<p>'.$excerpt.'</p>';
        echo '<a class="button orange" href="'.$link.'">READ MORE</a>';
      echo '</li>';
  	}
    echo '</ul>';
  }
  get_footer();
?>
