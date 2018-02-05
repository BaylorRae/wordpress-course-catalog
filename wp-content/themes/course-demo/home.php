<?php get_header() ?>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Video Course Site</h1>
      <p class="lead text-muted">Baylor makes best videos I've ever watched. He's just so awesome and humble and a pleasure to be around. You're awesome dude!</p>
      <p>
        <a href="/courses" class="btn btn-primary my-2">Browse Courses</a>
        <a href="#" class="btn btn-secondary my-2">Learn How This Was Made</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <?php get_template_part('courses-loop') ?>
    </div>
  </div>


<?php get_footer() ?>
