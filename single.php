<!DOCTYPE html>
<html lang="ja">

    <head>
        <?php get_header() ?>
    </head>

    <body>

        <?php get_template_part("includes/inc_nav") ?>

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!-- Page Header -->
        <header class="masthead" style="background-image:
            url('img/post-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <span class="meta">Posted by
                                <?php the_author() ?>
                                on <?php the_date() ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </article>

        <hr>
        <?php endwhile ?>
        <?php endif ?>
        <?php get_footer() ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/clean-blog.min.js"></script>

    </body>

</html>