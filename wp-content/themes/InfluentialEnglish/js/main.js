

function switchToMobile(){
  
  $j(".nav").toggleClass('nav nav-mobile');
  $j(".nav__menu").removeClass('menu');
  $j(".nav__menu").toggleClass('nav__menu nav__menu-mobile');
  $j(".nav__item").toggleClass('nav__item nav__item-mobile');
  $j(".nav__logo").toggleClass('nav__logo nav__logo-mobile');

  $j(".nav__menu-mobile").hide();
  $j(".nav__burgerButton-mobile").show();
  $j(".nav__logoWrapper-mobile").show();
  $j("nav__burgerButton-mobile").show();
}

function switchToDesktop(){
  $j(".nav-mobile").toggleClass('nav-mobile nav');
  $j(".nav__menu-mobile").addClass('menu');
  $j(".nav__menu-mobile").toggleClass('nav__menu-mobile nav__menu');
  $j(".nav__item-mobile").toggleClass('nav__item-mobile nav__item');
  $j(".nav__logo-mobile").toggleClass('nav__logo-mobile nav__logo');

  $j(".nav__menu").show();
  $j(".nav__burgerButton-mobile").hide();
}

function toggleMenu(){
  if($j(".nav__menu-mobile").is(":hidden")){
    $j(".nav__menu-mobile").show();
  }
  else{
    $j(".nav__menu-mobile").hide();
  }
}

function recolorMenu(){
  
}

var $j = jQuery.noConflict();

$j(document).ready(function(){
  if($j(window).width() < 992){
      switchToMobile();
    }
    else{
      switchToDesktop();
    }

  $j(window).resize(function(){
      if($j(window).width() < 992){
          switchToMobile();
        }
        else{
          switchToDesktop();
          $j(".nav__menu").removeAttr('style');
        }
  })
  

});