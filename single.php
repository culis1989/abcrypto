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
    //for use in the loop, list 5 post titles related to first tag on current post

    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
    echo '<hr>';
    echo '<h4>Related posts:</h4>';
    echo '<p>You may find these posts interesting as well.</p>';
    $first_tag = $tags[0]->term_id;
    $args=array(
          'tag__in' => array($first_tag),
          'post__not_in' => array($post->ID),
          'posts_per_page'=>5,
          'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <h5><?php the_title(); ?></h5>
        <p><?php the_excerpt(); ?></p>
        <a class="button orange" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">READ MORE</a>
      <?php
      endwhile;
    }
    wp_reset_query();
    }

    echo '</div>';
  echo '<aside class="grid3">';
    get_sidebar();
  echo '</div>';
  echo '</div>';
  get_footer();
?>
