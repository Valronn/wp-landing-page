<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="container"></div>
        <nav class="navbar navbar-expand-lg transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="toggler">
                    <div class="bar-1"></div>
                    <div class="bar-2 my-1"></div>
                    <div class="bar-3"></div>
                </div>
            </button>
            <a class="navbar-brand text-center text-uppercase" href="#"><b><?php echo get_bloginfo('name'); ?></b></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#screenshots">Screenshots</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#quotes">Reviews</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#download-app">Download</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div
                    class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column justify-content-center align-items-center mb-5">
                    <h1 class="display-3"><b>Get the most fun <br /> weather app</b></h1>
                    <h6 class="my-4">Simple, nice and user-friendly application of the<br /> weather. Only usefull
                        information</h6>
                    <div class="row buttons d-flex flex-wrap">
                        <button type="button" class="btn btn-raised ml-2 download-btn">Download</button>
                        <button type="button" class="btn btn-raised ml-2 feature-btn">Features</button>
                    </div>
                </div>
                <div class="d-none d-md-block col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid"
                        src="<?php echo get_bloginfo('template_directory'); ?>/images/phone_header/images/images/phone_03_03.png" />
                </div>
            </div>
            <div class="d-none d-md-block icon-down mx-auto">
                <a href='#features'><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </header>