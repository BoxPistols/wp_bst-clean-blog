<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part("includes/inc_nav") ?>



  <!-- Page Header -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <header class="masthead" style="background-image:
                url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="site-heading">
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>


      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <hr>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_footer() ?>
  <?php get_template_part("includes/inc_footer") ?>

</body>

</html>