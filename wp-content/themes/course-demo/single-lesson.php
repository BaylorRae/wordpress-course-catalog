<?php get_header() ?>

<div class="container py-5">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php
      $course = get_the_terms(get_post(), 'course')[0];
    ?>

    <a class="text-secondary" href="/courses">
      <i class="fas fa-chevron-left"></i>
      All Courses
    </a>
    /
    <a class="text-secondary" href="<?php echo get_term_link($course) ?>">
      <?php echo $course->name ?>
    </a>
    <h2 class="mb-3">
      Part <?php echo the_field('part') ?>
      -
      <?php the_title() ?>
    </h2>

    <div id="video-player">
      <iframe width="560" height="315" src="https://youtube.com/embed/<?php the_field('youtube_id') ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <div class="lesson-content">
      <?php the_content() ?>
    </div>

    <div class="d-flex justify-content-between mt-5">
      <div>
        <?php previous_post_link('&laquo; %link', '%title', true, '', 'course') ?>
      </div>

      <div>
        <?php next_post_link('%link &raquo;', '%title', true, '', 'course') ?>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.min.js"></script>
    <script>
      jQuery('#video-player').fitVids();
    </script>
    
  <?php endwhile ?>
</div>

<?php get_footer() ?>
