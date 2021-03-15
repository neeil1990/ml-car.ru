/**
 * Cайт Моторленд Автосервис  (http://ml-avtoservis.ru/)
 * Разработка - компания «Генерация» (создание и продвижение сайтов)
 * ---
 * Руководитель технического отдела - Илья Глаголев (http://vk.com/motoslam)
 * @mailto: development@promo01.ru
 * ---
 * http://promo01.ru
 */

$(document).ready(function() {

    /* Плавное движение элементов на странице */
    setTimeout(function() {
        $('.main-index-man').addClass('showing');
        $('.main-desc-content').removeClass('hidden-desc');
        $('.main-desc-inner').removeClass('hidden-desc');
        $('.main-desc').removeClass('hidden-desc');
    }, 100);

    /* Открытие / закрытие мобильного меню */
    $('.mobile-btn').click(function() {
        $(this).toggleClass('mobile-btn-close');
        $('.phone-block').fadeToggle('300');
        $('.address-block').fadeToggle('300');
        $('.mobile-navbar').fadeToggle('300');
    });

    /* Слайдер в шапке сайта */
    var l = 0;
    if ($("div").is(".main-slider-block")) {
        l = $('.mslider-content').length;
        for (var i = 0; i < l; i++) {
            $('.mslider-counter').append('<a href="javascript:void(0)" class="mslider-point"></a>');
        }
        $('.mslider-point:first').addClass('active');
    }
    var is_slide = 0;
    $('.mslider-arrow-right').click(function() {
        is_slide++;
        if (is_slide >= l) { is_slide = 0; }
        $('.mslider-counter').find('.active').removeClass('active');
        $('.mslider-point').eq(is_slide).addClass('active');
        var w = $('.mslider-content').width();
        $('.mslider-content:first').animate({ marginLeft: '-' + (w + 84) + 'px' }, 400, 'easeInBack', function() {
            $('.mslider-content:first').appendTo('.main-slider-block');
            $('.mslider-content:last').css({ marginLeft: '80px' });
        });
    });
    $('.mslider-arrow-left').click(leftSwipe);
    $(".mslider-content").swipe({
        swipeLeft: rightSwipe,
        swipeRight: leftSwipe,
        threshold: 0
    });

    function leftSwipe(event) {
        is_slide--;
        if (is_slide < 0) { is_slide = l - 1; }
        $('.mslider-counter').find('.active').removeClass('active');
        $('.mslider-point').eq(is_slide).addClass('active');
        var w = $('.mslider-content').width();
        $('.mslider-content:last').prependTo('.main-slider-block');
        $('.mslider-content:first').css({ marginLeft: '-' + (w + 84) + 'px' });
        $('.mslider-content:first').animate({ marginLeft: '80px' }, 400, 'easeOutBack', function() {});
    }

    function rightSwipe(event) {
        is_slide++;
        if (is_slide >= l) { is_slide = 0; }
        $('.mslider-counter').find('.active').removeClass('active');
        $('.mslider-point').eq(is_slide).addClass('active');
        var w = $('.mslider-content').width();
        $('.mslider-content:first').animate({ marginLeft: '-544px' }, 400, 'easeOutBack', function() {
            $('.mslider-content:first').appendTo('.main-slider-block');
            $('.mslider-content:last').css({ marginLeft: '80px' });
        });
    }

    $('.main-slider-block-new').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        variableWidth: true,
        dots: true,
        centerMode: true,
        cssEase: "cubic-bezier(0.6, -0.28, 0.735, 0.045)"
    });

    /* Мини галерея на главной странице */
    $('.gallery-left-hover').hover(function() {
        $('.gallery').css({ textIndent: "0px" });
    }, function() {
        $('.gallery').css({ textIndent: "-250px" });
    });
    $('.gallery-right-hover').hover(function() {
        $('.gallery').css({ textIndent: "-500px" });
    }, function() {
        $('.gallery').css({ textIndent: "-250px" });
    });

    /* Плавный скролл до якорей на странице */
    $('a[href^="#"]').click(function(e) {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        if ($.browser.safari) {
            $('body').stop().animate({ scrollTop: destination }, 1100);
        } else {
            $('html').stop().animate({ scrollTop: destination }, 1100);
        }
        e.preventDefault();
        return false;
    });

    //$('input[name="phone"]').inputmask('+7 999 999 99 99');
    $('input[name="phone"]').bind("change keyup input click", function() {
        if (this.value.match(/[^\+0-9]/g)) {
            this.value = this.value.replace(/[^\+0-9]/g, '');
        }
    });

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $("a[href*='#2calls']").attr('href', 'tel:+74732349798');
    }

    $('.btn-about-text').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).siblings('.about-text').animate({
                height: '100%'
            }, {
                duration: 50,
                specialEasing: {
                    height: 'linear'
                }
            });
            $(this).text('Свернуть');
        } else {
            $(this).siblings('.about-text').animate({
                height: '110px'
            }, {
                duration: 50,
                specialEasing: {
                    height: 'linear'
                }
            });
            $(this).removeClass('active');
            $(this).text('Читать далее');

        }

    });

    if($('.services-list').length){

        $('.services-list > div').each(function (i, el) {

            if($(el).find('.service-item-in').length){

                $(el).find('.service-item-in').text(function (index, text) {
                    var crop = 21;

                    var shortText = $.trim(text).substring(0, crop)
                        .split(" ").join(" ") + "...";

                    if(text.length > crop){
                        $(this).attr('title', text).tooltip({
                            track : true,
                            hide : false,
                        });

                        return shortText;
                    }else{
                        return text;
                    }
                });
            }
        });
    }

    if($('#drop-down-list').length){

        $('#drop-down-list > div').after(function (i) {
            if(i == 7){
                return $('<a/>', {
                    href : '/services/',
                    "class" : 'discount-learn'
                }).text('Показать все услуги').click(function () {
                    $(this).parent().children().show();
                    $(this).remove();

                    return false;
                });
            }else if(i > 7){
                $(this).hide();
            }
        });
    }

    $(window).on('load resize scroll', function() {

        var width = $(window).width();

        if (width < '521') {
            $('.services-list').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                variableWidth: true,
                dots: false,
                swipeToSlide: true
            });
        }

    });

});

ymaps.ready(init);
var myMap;
var centerx = $('#map-setting').attr('centerx');
var centery = $('#map-setting').attr('centery');
var markx = $('#map-setting').attr('markx');
var marky = $('#map-setting').attr('marky');
var marktitl = $('#map-setting').attr('marktitl');
var markdescr = $('#map-setting').attr('markdescr');

function init() {
    myMap = new ymaps.Map("yamap", {
        center: [centerx, centery],
        zoom: 14,
        controls: []
    });
    myMap.behaviors.disable('scrollZoom');

    myPlacemark = new ymaps.Placemark([markx, marky], {
        hintContent: marktitl,
        balloonContent: markdescr,
        iconCaption: marktitl
    }, {
        preset: "islands#redCircleDotIconWithCaption"
    });

    myMap.geoObjects.add(myPlacemark);
}

$('.checkbox span').click(function() {
    $('.checkbox-error').removeClass('checkbox-error');
    var checkbox = $(this).find('input:checkbox');
    if (checkbox.prop('checked')) {
        checkbox.prop('checked', false);
    } else {
        checkbox.prop('checked', 'checked');
    }
    $(this).parent().toggleClass('checked');
    return false;
});


var feedback_submit = function() {
    //alert('click');
    var name = $('#name').val(),
        phone = $('#phone').val(),
        /*email = $('#feedback-setting').attr('email'),*/
        form = $('#name').closest('.feedback-form');
    if (form.find('.agree').find('.checkbox').hasClass('checked') == false) {
        form.find('.agree').find('.checkbox').addClass('checkbox-error');
        return false;
    }
    if (name && phone) {
        $.ajax({
            type: "POST",
            url: "/ajax/feedback.php",
            data: 'name=' + name + '&phone=' + phone,
            success: function(response) {
                // $('.feedback-heading').html('Спасибо, в ближайшее время мы с вами свяжемся!');
                $('.feedback-form-success').show();
                $('.feedback-form-group').hide();
                form.find('.agree').find('.checkbox').removeClass('checked');
                $('#name').val('');
                $('#phone').val('');
            }
        });
    }
}
