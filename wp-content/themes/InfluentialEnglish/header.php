<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Our main goal at Influential English is to provide our students with high-quality English classes at the lowest-cost possible.">
    <?php wp_head(); ?>
    <title>Influential English</title>
</head>
<body>
    <header>
      <nav class="nav">
        <div class="nav__logoWrapper-mobile">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="nav__logo" /></a>
          <a class="nav__burgerButton-mobile" onclick="toggleMenu()"><span class="material-icons ">menu</span></a>
        </div>
        <ul class="nav__menu menu">
          <li><a href="#" class="nav__item">Courses</a></li>
          <li><a href="#" class="nav__item">Teachers</a></li>
          <li><a href="#" class="nav__item">Contact</a></li>
          <li>
            <a href="#" class="nav__item button button__green"
              >Free trial class</a
            >
          </li>
        </ul>
      </nav>
      <iframe
        class="carousel-video"
        src="https://www.youtube.com/embed/xMiqJDV9KR0?playlist=xMiqJDV9KR0&loop=1;rel=0&autoplay=1&controls=0&showinfo=0&mute=1"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope;"
        allowfullscreen
      ></iframe>
    </header>
    <main>
        <div class="triangle"></div>
