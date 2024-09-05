jQuery(document).ready(function ($) {
  $(".content-slider-block .content-slider-slides").slick({
    autoplay: false,
    arrows: true,
    dots: false,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    useTransform: false,
    infinite: true,
  });
});
