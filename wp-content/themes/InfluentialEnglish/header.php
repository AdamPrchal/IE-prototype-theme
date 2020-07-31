<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Our main goal at Influential English is to provide our students with high-quality English classes at the lowest-cost possible.">
    <?php wp_head(); ?>
    <title>Influential English</title>
</head>
<body>
<header>
    <nav class="nav">
        <div class="nav__logoWrapper-mobile">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                                         alt="" class="nav__logo"/></a>
            <a class="nav__burgerButton-mobile" onclick="toggleMenu()"><span class="material-icons ">menu</span></a>
        </div>
        <ul class="nav__menu menu">
            <li class="dropdown nav__item">
                <a class="dropbtn ">Courses
                </a>
                <div class="dropdown-content">
                    <div class="dropdown-content__list">
                        <a class="nav__item" href="<?php echo esc_url( get_permalink( get_page_by_title( 'IELTS Academic course' ) ) ); ?>">IELTS Academic</a>
                        <a class="nav__item" href="<?php echo esc_url( get_permalink( get_page_by_title( 'General English courses' ) ) ); ?>">General English</a>
                    </div>

                </div>
            </li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Teachers' ) ) ); ?>" class="nav__item">Teachers</a></li>
            <li><a href="#" class="nav__item">Contact</a></li>
            <li>
                <a data-paperform-id="i2xbkvra" data-popup-button="1" href="#" class="nav__item button button__green"
                >Free trial class</a
                >
                <script>(function() { var script = document.createElement('script'); script.src = "https://paperform.co/__embed";document.body.appendChild(script); })()</script>
            </li>
        </ul>
    </nav>

