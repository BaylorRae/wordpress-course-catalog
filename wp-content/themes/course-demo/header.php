<!DOCTYPE html>
<html lang="en">
<head>
<title><?php bloginfo('name') ?><?php wp_title() ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand d-flex align-items-center">
        <i class="fas fa-forward mr-2"></i>
        <strong><?php bloginfo('name') ?></strong>
      </a>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <?php $items = wp_get_nav_menu_items('Main Menu') ?>
          <?php foreach ( $items as $item ) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
          </li>
          <?php endforeach ?>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/BaylorRae/wordpress-course-catalog">View Source</a>
          </li>
          <li class="nav-item ml-2">
            <a class="btn btn-success" href="https://youtu.be/bT0pmeh9Wtg">Like This Video!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main role="main">

