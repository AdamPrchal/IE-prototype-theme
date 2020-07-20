/* <nav class="nav-mobile">
<img src="img/logo.png" alt="" class="nav__logo-mobile" />

<ul class="nav__menu-mobile ">
  <li class="nav__item-mobile"><a href="#" >Courses</a></li>
  <li class="nav__item-mobile"><a href="#" >Teachers</a></li>
  <li class="nav__item-mobile"><a href="#" >Contact</a></li>
    <a href="#" class="nav__item-mobile button button__green"
      >Free trial class</a
 */

function switchToMobile(){
    $(".nav").toggleClass('nav nav-mobile');
    $(".nav__menu").removeClass('menu');
    $(".nav__menu").toggleClass('nav__menu nav__menu-mobile');
    $(".nav__item").toggleClass('nav__item nav__item-mobile');
    $(".nav__logo").toggleClass('nav__logo nav__logo-mobile');
}

function switchToDesktop(){
    $(".nav-mobile").toggleClass('nav-mobile nav');
    $(".nav__menu-mobile").addClass('menu');
    $(".nav__menu-mobile").toggleClass('nav__menu-mobile nav__menu');
    $(".nav__item-mobile").toggleClass('nav__item-mobile nav__item');
    $(".nav__logo-mobile").toggleClass('nav__logo-mobile nav__logo');
}


$(document).ready(function(){
    if($(window).width() < 992){
        switchToMobile();
      }
      else{
        switchToDesktop();
      }

    $(window).resize(function(){
        if($(window).width() < 992){
            switchToMobile();
          }
          else{
            switchToDesktop();
          }
    })
    

  });