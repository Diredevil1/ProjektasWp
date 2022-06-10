<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    </style>
    <!-- Owl Corusel links -->
</head>


<body>

    <!-- NAVIGATION BAR -->
    <nav id="navbar">
        <div class="container-fluid">
            <div class="container">

                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>

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
    <?php wp_head(); ?>