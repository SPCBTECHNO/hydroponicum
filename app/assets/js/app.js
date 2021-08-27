$(document).ready(function() {

    if(window.location.href.includes('?form=success')) {
        $('html,body').animate({scrollTop:$('#contacts').offset().top - $('.header').height() + 'px'})
        $('.contacts__title h2').text('Данные успешно отправлены')
        $('.contacts__container').append('<span class="contacts__subtitle">Мы скоро с Вами свяжемся!</span>')
    } else if(window.location.href.includes('?form=error')) {
        $('html,body').animate({scrollTop:$('#contacts').offset().top - $('.header').height() + 'px'})
        $('.contacts__title h2').text('Ошибка отправки данных')
        $('.contacts__container').append('<span class="contacts__subtitle">Мы уже работаем над её устранением!</span>')
    }


    $('.header__nav_link').click(function() {
        $('.header__nav_link').removeClass('header__nav_link--active');
        $(this).addClass('header__nav_link--active');
    });

    // Плавная прокрутка до якоря
    $(function(){
        $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top - $('.header').height() + "px"});
                return false;
        });
    });

    // Фиксация шапки при прокруте страницы
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.header').addClass('header--fixed');
        } else {
            $('.header').removeClass('header--fixed'); 
        };
    });

    // Sweper.js
    new Swiper('.mobile-menu', {
        slidesPerView: 'auto',
        spaceBetween: 16,
        wrapperClass: 'mobile-menu__wrapper',
        slideClass: 'mobile-menu__link',
        breakpoints: {
            320: {
                setWrapperSize: 'auto',
                slidesPerView: 2.5
            },
            768: {
                setWrapperSize: 'auto',
                slidesPerView: 5.5
            },
            1024: {
                setWrapperSize: 'auto',
                slidesPerView: 'auto'
            },
            1440: {
                setWrapperSize: 'auto',
                slidesPerView: 7,
                spaceBetween: 0
            }
        }
    });

    // WoW.js
    new WOW().init();
    
})