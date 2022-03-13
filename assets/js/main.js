let mobileMenu = document.querySelector('.mobile-nav');
let mobileUl = document.querySelector('.mobile-nav ul');
burgerMenuBtn = document.querySelector('.burger')
let visible = false;

burgerMenuBtn.addEventListener('click', () => {
  if (visible === false) {
    mobileMenu.style.visibility = 'visible';
    mobileMenu.style.opacity = '1';
    mobileMenu.style.height = '80vh';
    mobileUl.style.visibility = 'visible';
    mobileUl.style.opacity = '1';




    visible = true;
  } else if (visible === true) {
    mobileMenu.style.visibility = 'hidden';
    mobileMenu.style.opacity = '0';
    mobileMenu.style.height = '0px';
    mobileUl.style.visibility = 'hidden';
    mobileUl.style.opacity = '0';

    visible = false;
  }
});



var introCarousel = $(".carousel");
var introCarouselIndicators = $(".carousel-indicators");
introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
  (index === 0) ?
  introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>"):
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

  $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') + "')");
  $(this).children('.carousel-background').remove();
});


$(".carousel").carousel({
  interval: 4000
})


$(".carousel").swipe({
  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');
  },
  allowPageScroll: "vertical"
});
