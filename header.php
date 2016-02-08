<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="SitePoint">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
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
        <a class="logo" href="/">ABCrypto.com</a>
      </div>
      <div class="pull-right">
        <nav>
          <?php wp_nav_menu( array('theme_location'=> 'main_menu')); ?>
        </nav>
      </div>
      <div class="clear"></div>
    </div>
  </header>
