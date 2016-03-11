<?php
/**
 * Template Name: Contact Page
 */
  get_header();
  echo '<div id="map_canvas"></div>';
  echo '<div class="wrapper" id="content">';
    echo '<div class="fluid">';
      echo '<div class="grid9">';
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();

          if ( function_exists( 'ot_get_option' ) ) {
            $contact_title = ot_get_option( 'contact_title' );
            $email = ot_get_option('email');
            $phone = ot_get_option('phone');
            $linkedin = ot_get_option('linkedin');
            $owner = ot_get_option('owner');
          }
          $title = get_the_title();

          echo '<h1>'.$title.'</h1>';
          the_content();

          echo '<div class="fluid">';
            echo '<div class="grid5 contact_list">';?>
            <ul>
            <?php
                echo '<li><a target="_blank" href="'.$linkedin.'"><i class="fa fa-user"></i>'.$owner.'</a></li>';
                echo '<li><a href="mailto:'.$email.'"><i class="fa fa-envelope"></i>'.$email.'</a></li>';
                echo '<li><a href="tel:'.replace($phone).'"><i class="fa fa-phone"></i>'.$phone.'</a></li>';
             ?>
            </ul>
            <?php
            echo '</div>';
            echo '<div class="grid7">';
              echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]');
            echo '</div>';
          echo '</div>';
          ?>
          <script>
          /*<![CDATA[*/var map = new google.maps.Map(document.getElementById('map_canvas'), {
          zoom: 10,
          scrollwheel: false,
          center: new google.maps.LatLng( 44.8395055 , 20.4160216 ),
          mapTypeId: google.maps.MapTypeId.ROADMAP
          });

          var myMarker = new google.maps.Marker({
          position: new google.maps.LatLng( 44.8395055, 20.4160216 ),
          draggable: false
          });

          map.setCenter(myMarker.position);
          myMarker.setMap(map);/*]]>*/
          </script>
          <?php


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
