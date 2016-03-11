<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="author" content="Goran Kunjadić">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAYvixJv11JwjaJYTRyj9-oTs7723Ta-jc"></script>
  <?php wp_head(); ?>
  <?php
  function replace($raw_phone){
    return str_replace(array("/","-","(",")"," "), "", $raw_phone);
  }
   ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="wrapper">
      <div class="pull-left">
        <a class="logo" href="/"><i class="fa fa-lock"></i> AB<span>Crypto</span></a>
      </div>
      <div class="pull-right">
        <nav>
            <span id="menu_trigger" class="mobile_menu_icon"><i class="fa fa-bars"></i></span>
          <?php wp_nav_menu( array('theme_location'=> 'main_menu')); ?>
        </nav>
      </div>
      <div class="clear"></div>
    </div>
  </header>
  <div class="breadcrumbs">
    <div class="wrapper">
    <?php if(function_exists('bcn_display')){
      bcn_display();
    }?>
    </div>
  </div>
