<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- dns prefetch -->
  <link href="//www.google-analytics.com" rel="dns-prefetch">

  <!-- meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

  <!-- css + javascript -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
  <script>
  !function(){
    // configure legacy, retina, touch requirements @ conditionizr.com
    conditionizr()
  }()
  </script>
</head>
<body <?php body_class(); ?>>

  <!-- wrapper -->
  <div class="wrapper clearfix">

    <!-- header -->
    <header class="header clearfix" role="banner">

      <!-- logo -->
      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
        <a href="<?php echo home_url(); ?>">
        <?php  } ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
        <?php if ( is_front_page() && is_home() ){
        } else { ?>
        </a>
        <?php } ?>
        <h1>Питомник Акита ину и Сиба ину</h1>
      </div>
      <!-- /logo -->

      <!-- nav -->
      <nav class="nav" role="navigation">
        <?php wpeHeadNav(); ?>
      </nav>
      <!-- /nav -->

      <ul class="small-nav clearfix">
        <li class="button-1"><a href="<?php echo home_url(); ?>/news">Новости</a></li>
        <li class="button-2"><a href="<?php echo home_url(); ?>/contacts">Контакты</a></li>
      </ul>

    </header>
    <!-- /header -->
