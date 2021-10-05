<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part("includes/inc_header") ?>
  <?php get_template_part("includes/inc_nav") ?>

  <!-- Main Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle">
                  <?php the_excerpt() ?>
                </h3>
              </a>
              <p class="post-meta">
                Posted by
                <?php the_author(); ?>
                on
                <?php the_time(get_option('date_format')); ?>
                <!--  <?php the_date(); ?> -->
              </p>
            </div>
            <hr />
          <?php endwhile; ?>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>

        <?php else : ?>
          <p>記事が見つかりませんでし</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <hr />

  <?php get_footer() ?>
  <?php get_template_part("includes/inc_footer") ?>

</body>

</html>