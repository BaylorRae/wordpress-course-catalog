<?php
   
$course = get_queried_object();

$lessons = new WP_Query(array(
  'tax_query' => array(
    array(
      'taxonomy' => 'course',
      'field' => 'id',
      'terms' => $course->term_id
    )
  ),
  'post_type' => 'lesson',
  'posts_per_page' => -1,
  'orderby' => 'part',
  'order' => 'asc'
));

get_header() ?>

<div class="container py-5">

  <a class="text-secondary" href="/courses">
    <i class="fas fa-chevron-left"></i>
    All Courses
  </a>
  <h2 class="mb-3"><?php echo $course->name ?></h2>

  <?php if( $lessons->have_posts() ) : ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Part</th>
          <th>Title</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <?php while( $lessons->have_posts() ) : $lessons->the_post() ?>
          <tr>
            <td><?php the_field('part') ?></td>
            <td>
              <a href="<?php the_permalink() ?>">
                <?php the_title() ?></td>
              </a>
            </td>
            <td><?php echo gmdate('i:s', get_field('duration')) ?></td>
          </tr>
        <?php endwhile ?>
      </tbody>
    </table>
  <?php endif ?>

</div>

<?php get_footer() ?>
