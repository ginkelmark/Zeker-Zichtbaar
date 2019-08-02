<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

    <div id="cloud-section">
        <div class="container col-lg-10 cloud-section-container">
            <div class="row col-lg-12 flex-column-center">
                <div class="col-xs-12 col-lg-4 col-sm-10">
                    <h2 class="h2-title">Ervaar de kracht van de cloud</h2>
                </div>
                <div class="cloud-cards-container col-lg-12 col-sm-6">
                    <div class="cloud-card col-lg-3 col-md-12 col-sm-12 shadow">
                        <img class="card-img-top cloud-img" src="wp-content/themes/zz/images/img1.png">
                        <div class="card-body flex-column-center">
                            <h5 class="card-title"><?php the_field('cloud-card-1-title'); ?></h5>
                            <p><?php the_field('cloud-card-1-description'); ?></p>
                            <div class="read-more">
                                <a href="<?php the_field('cloud-card-1-link'); ?>">Lees meer</a>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cloud-card col-lg-3 col-md-12 col-sm-12 shadow">
                        <img class="card-img-top cloud-img" src="wp-content/themes/zz/images/img2.png">
                        <div class="card-body flex-column-center">
                            <h5 class="card-title">Veiligheid</h5>
                            <p>Uw IT-omgeving en data goed beveiligd. Een rustgevende gedachte.</p>
                            <div class="read-more">
                                <a href="#">Lees meer</a>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cloud-card col-lg-3 col-md-12 col-sm-12 shadow">
                        <img class="card-img-top cloud-img" src="wp-content/themes/zz/images/img3.png">
                        <div class="card-body flex-column-center">
                            <h5 class="card-title">Altijd toegankelijk</h5>
                            <p>De beste prestaties dankzij een veilig, gebruiksvriendelijk en schaalbaar platform.</p>
                            <div class="read-more">
                                <a href="#">Lees meer</a>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cloud-card col-lg-3 col-md-12 col-sm-12 shadow">
                        <img class="card-img-top cloud-img" src="wp-content/themes/zz/images/img4.png">
                        <div class="card-body flex-column-center">
                            <h5 class="card-title">Managed services</h5>
                            <p>Onze garantie dat we dagelijks voorzien in elke IT behoefte.</p>
                            <div class="read-more">
                                <a href="#">Lees meer</a>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>