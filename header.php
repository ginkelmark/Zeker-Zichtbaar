<html>
<head>
    <title>Zeker Zichtbaar</title>
    <!--JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/flickity.min.js'; ?>"></script>

    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/footer.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/header.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/global.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/variables.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/navbar.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/flickity.min.css'; ?>">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
<div id="wrapper">
    <div class="jumbotron header-container">
        <nav class="navbar navbar-inverse">
            <div class="col-lg-10 space-between">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Diensten</a></li>
                    <li><a href="#">Kennis</a></li>
                    <li><a href="#">Over ons</a></li>
                    <li><a href="#">Werken bij</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="white-button shadow"><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="carousel"
             data-flickity='{ "wrapAround": true, "draggable": false, "autoPlay": 10000, "pauseAutoPlayOnHover": false, "pageDots": false}'>
            <div style="background-image: url(<?php the_field('slider-1-background-image'); ?>); background-position: <?php the_field('background-position'); ?>"
                 class="carousel-cell">
                <div class="container col-lg-10">
                    <div class="page-header col-lg-6">
                        <h1><?php the_field('slider-1-title'); ?></h1>
                        <p><?php the_field('slider-1-description'); ?></p>
                        <div class="red-button shadow2"><a
                                    href="<?php the_field('slider-1-button-url'); ?>"><?php the_field('slider-1-button-label'); ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background-image: url(<?php the_field('slider-2-background-image'); ?>);" class="carousel-cell">
                <div class="container col-lg-10">
                    <div class="page-header col-lg-6">
                        <h1><?php the_field('slider-2-title'); ?></h1>
                        <p><?php the_field('slider-2-description'); ?></p>
                        <div class="red-button shadow2"><a
                                    href="<?php the_field('slider-2-button-url'); ?>"><?php the_field('slider-2-button-label'); ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background-image: url(<?php the_field('slider-3-background-image'); ?>);" class="carousel-cell">
                <div class="container col-lg-10">
                    <div class="page-header col-lg-6">
                        <h1><?php the_field('slider-3-title'); ?></h1>
                        <p><?php the_field('slider-3-description'); ?></p>
                        <div class="red-button shadow2"><a
                                    href="<?php the_field('slider-3-button-url'); ?>"><?php the_field('slider-3-button-label'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
