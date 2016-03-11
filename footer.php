<?php
if ( function_exists( 'ot_get_option' ) ) {
  $contact_title = ot_get_option( 'contact_title' );
  $email = ot_get_option('email');
  $phone = ot_get_option('phone');
  $linkedin = ot_get_option('linkedin');
  $owner = ot_get_option('owner');
}
?>

  </div>
  <footer>
    <div class="wrapper">
      <div class="fluid">
        <div class="grid4">
          <?php
            if (is_active_sidebar( 'widget-1' ) ){
                dynamic_sidebar( 'widget-1' );
              }
           ?>
        </div>
        <div class="grid2 list">
          <?php
            if (is_active_sidebar( 'widget-2' ) ){
                dynamic_sidebar( 'widget-2' );
              }
           ?>
        </div>
        <div class="grid3 latest list">
          <?php
            if (is_active_sidebar( 'widget-3' ) ){
                dynamic_sidebar( 'widget-3' );
              }
           ?>
        </div>
        <div class="grid3 list">
          <h3><?php echo $contact_title; ?></h3>
          <ul>
          <?php
              echo '<li><a target="_blank" href="'.$linkedin.'"><i class="fa fa-user"></i>'.$owner.'</a></li>';
              echo '<li><a href="mailto:'.$email.'"><i class="fa fa-envelope"></i>'.$email.'</a></li>';
              echo '<li><a href="tel:'.replace($phone).'"><i class="fa fa-phone"></i>'.$phone.'</a></li>';
           ?>
          </ul>
        </div>
      </div>
  </footer>
  <div class="bottom">
    <div class="wrapper">
      <div class="pull-left">
        Copyright © 2016 ABCrypto
      </div>
      <div class="pull-right">
        developed by <a class="p2g" target="_blank" href="http://pixel2go.com">PIXEL2GO</a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <script>
  function mobile_nav(){
    $("#menu_trigger").click(function() {
        console.log('test');
        $width = $(window).width();
        if($width<800){
            $("header nav ul").toggle();
        }
    });
  }
  $(document).ready(function() {
       mobile_nav();
   });

  </script>
<?php wp_footer(); ?>
</body>
</html>
