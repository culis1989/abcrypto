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
        <div class="grid4">
          <?php
            if (is_active_sidebar( 'widget-2' ) ){
                dynamic_sidebar( 'widget-2' );
              }
           ?>
        </div>
        <div class="grid4">
          <?php
            if (is_active_sidebar( 'widget-3' ) ){
                dynamic_sidebar( 'widget-3' );
              }
           ?>
        </div>
      </div>
  </footer>
  <div class="bottom">
    <div class="wrapper">
      <div class="pull-left">
        designed by masa i filip
      </div>
      <div class="pull-right">
        email
      </div>
      <div class="clear"></div>
    </div>
  </div>
<?php wp_footer(); ?>
</body>
</html>
