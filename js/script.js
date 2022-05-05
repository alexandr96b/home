$(document).ready(function () {

// === Begin button ripple style === \\\
$(".ripple").on("click", function(event) {
   var _this = $(this),
       offset = $(this).offset(),
       positionX = (event.pageX - offset.left),
       positionY = (event.pageY - offset.top);
   _this.append("<span class='ripple-effect'>");
   _this.find(".ripple-effect").css({
       left: positionX,
       top: positionY
   }).animate({
       opacity: 0,
   }, 1500, function() {
       $(this).remove();
   });
});
// === End button ripple style === \\\

$('.menu-icon').click(function(){
    $('.b-header__right').toggleClass('active');
    $('.menu-icon').toggleClass('active');
    $(document).on('click', function(event) {
        if (!$(event.target).closest(".b-header__right , .menu-icon").length) {
            $('.b-header__right').removeClass('active');
            $('.menu-icon').removeClass('active');
        }
        event.stopPropagation();
    });
});


var swiper = new Swiper('.b-impression__slider', {
  slidesPerView: 'auto',
  slidesToScroll: 1,
    freeMode: true,
    loop: true,
    /*speed: 5000,*/
    autoplay: {
        /*delay: 1,*/
        disableOnInteraction: false
    },
    navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
    },
});

$(".swiper-container").mouseenter(function() {
    swiper.autoplay.stop();
});
$(".swiper-container").mouseleave(function() {
    swiper.autoplay.start();
});

    var swiper = new Swiper('.b-milestones__slider', {
        slidesPerView: 'auto',
        slidesToScroll: 1,
        freeMode: false,
        loop: true,
        navigation: {
            nextEl: ".b-milestones .btn-next",
            prevEl: ".b-milestones .btn-prev",
        },
    });


    var jsTriggers = document.querySelectorAll('.js-tab-trigger'),
        jsContents = document.querySelectorAll('.js-tab-content');
    jsTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            var id = this.getAttribute('data-tab'),
                content = document.querySelector('.js-tab-content[data-tab="'+id+'"]'),
                activeTrigger = document.querySelector('.js-tab-trigger.active'),
                activeContent = document.querySelector('.js-tab-content.active');

            activeTrigger.classList.remove('active'); // 1
            trigger.classList.add('active'); // 2

            activeContent.classList.remove('active'); // 3
            content.classList.add('active'); // 4
        });
    });




});



