<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<body>

    <!---------------- NAV END ------------------->


    <!-- MAIN CONTENT -->
    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="header-text">
                            <?php
                            if (have_posts()) {

                                while (have_posts()) {

                                    the_post();
                                    the_content();
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/fatty-corgi-1QsQRkxnU6I-unsplash.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF CAROUSEL -->
            </div>
        </div>
    </main>

    <!------------------------------ END OF MAIN ----------------------->

    <!------------------------------ POST SECTION ----------------------->

    <section class="posts-naujienos">
        <div class="container-fluid">
            <div class="container">
                <h3>Naujienos</h2>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container-fluid">
            <div class="container">
                <div class="card-group">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'facetwp' => true,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>


                            <div class="card">
                                <div class=" card-body">
                                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                                    <p> <?php echo get_the_excerpt(); ?> </p>

                                    <a href="<?php echo get_the_permalink(); ?>">Daugiau</a>
                                </div>
                            </div>



                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>





    </section>
    <!------------------- Posts section end --------------------->

    <!-------------------- Dog sports carousel -------------------->
    <section id="sporto-šakos" class="posts-naujienos">
        <div class="container-fluid">
            <div class="container">
                <h3>Sporto Šakos</h2>
            </div>
        </div>
    </section>


    <div class="owl-carousel-container">
        <div class="container-fluid">
            <div class="container">
                <div class="owl-carousel">

                    <div>
                        <div class="card">
                            <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);">
                            </div>
                            <div class="card-body">
                                <h4>Obedience</h4>
                                <p class=" card-text">Developed in the 1930s, the sport of obedience is all about fostering dogs that are well-behaved at home, in public, and in the presence of other dogs. During an obedience trial, dogs must demonstrate abilities like walking politely, staying, retrieving, and jumping, all while showing they enjoy working with their handler... <a href="obedience">More</a></p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);">
                            </div>
                            <div class="card-body">
                                <h4>Coursing</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content... <a href="coursing">More</a></p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);">
                            </div>
                            <div class="card-body">
                                <h4>Tracking</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content... <a href="tracking">More</a></p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);">
                            </div>
                            <div class="card-body">
                                <h4>Frisbee</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content... <a href="frisbee">More</a></p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);">
                            </div>
                            <div class="card-body">
                                <h4>Agility</h4>
                                <p class="card-text">Dog agility is a dog sport in which a handler directs a dog through an obstacle course in a race for both time and accuracy. Dogs run off leash with no food or toys as incentives, and the handler can touch neither dog nor obstacles.... <a href="agility">More</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------ FOOTER -------------->
    <?php get_footer(); ?>