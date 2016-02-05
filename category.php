<?php
  get_header();
  if ( have_posts() ) {
    echo '<ul>';
  	while ( have_posts() ) {
    	the_post();

      echo '<li>';
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $link = get_permalink();
        $tags = get_the_tags();

        echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
        if($tags){
          foreach ($tags as $tag) {
            echo '<a href="/tag/'.$tag->slug.'">'.$tag->name.'</a> / ';
          }
        }
        echo '<p>'.$excerpt.'</p>';
        echo '<a class="button" href="'.$link.'">READ MORE</a>';
      echo '</li>';
  	}
    echo '</ul>';
  }
  get_footer();
?>
