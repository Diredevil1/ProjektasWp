<?php get_header(); ?>

<body>

    <!-- NAVIGATION BAR -->
    <nav id="navbar">
        <div class="container-fluid">
            <div class="container">


                <div class="Logo">Šunų sportas/LOGO</div>

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="nav-nav">%3$s</ul>'
                    )
                )
                ?>

                <button class="hamburger">
                    <div class="bar"></div>
                </button>


                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'hamburger',
                        'container' => '',
                        'theme_location' => 'hamburger',
                        'items_wrap' => '<ul id="" class="mobile-nav">%3$s</ul>'
                    )
                )
                ?>

            </div>
        </div>
    </nav>

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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Header</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Header</h5>
                            <p class="card-text">This card has supporting text below as a natural
                                lead-in to
                                additional
                                content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Header</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This card has even longer content than the first to
                                show
                                that equal
                                height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Header</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Header</h5>
                            <p class="card-text">This card has supporting text below as a natural
                                lead-in to
                                additional
                                content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Header</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This card has even longer content than the first to
                                show
                                that equal
                                height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small>
                            </p>
                        </div>
                    </div>
                </div>


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
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
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
                                    of the card's content.</p>
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
                                    of the card's content.</p>
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
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="carousel-bg" style="background: url(wp-content/themes/TestProject/assets/images/pauline-loroy-U3aF7hgUSrk-unsplash.jpg);">
                            </div>
                            <div class="card-body">
                                <h4>Agility</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------ FOOTER -------------->
    <?php get_footer(); ?>