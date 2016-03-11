<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="SitePoint">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body class="error404">
  <div class="error">
    <h1>ERROR <span>404</span></h1>
    <p>Page not found.</p>
    <?php get_search_form(); ?>
    <p class="sub">Use the search above, or visit our <a href="/">homepage.</a></p>
  </div>
</body>
</html>
