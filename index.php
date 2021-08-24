<!DOCTYPE html>
<html lang="ja">

    <head>
        <?php get_header() ?>
    </head>

    <body>
        <!-- Navigation -->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post.html">Sample Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <header class="masthead" style="background-image:
                url('img/home-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
                                <!-- Problems look mighty small from
                                150 miles up -->
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

    </body>

</html>