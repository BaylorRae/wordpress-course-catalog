<?php
  $courses = get_terms('course', array( 'orderby' => 'id', 'order' => 'desc' ));
?>

<div class="row">

  <?php foreach ( $courses as $course) : ?>
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="<?php the_field('thumbnail', $course) ?>" data-holder-rendered="true" style="width: 100%; display: block;">
        <div class="card-body">
          <p class="card-text"><?php echo $course->description ?></p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><?php echo $course->count ?> <?php echo _n('lesson', 'lessons', $course->count) ?></small>
            <a class="btn btn-sm btn-outline-success" href="<?php echo get_term_link($course) ?>">
              Start Course
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

</div>

