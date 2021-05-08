$(function() {
    /*
        1 : Main functions
        2 : Header
        3 : Homepage
        4 : Vocabulary
            4.1 : Numbers
            4.2 : Cooking
            4.3 : Courtesy
        5 : Training
        6 : About us
        7 : Portfolio
        8 : Travels
        9 : Footer
        10 : Admin

    */ 

    /* ---------- 1 : Main functions ---------- */

    // Toggle click

    (function($) {
        $.fn.clickToggle = function(func1, func2) {
            var funcs = [func1, func2];
            this.data('toggleclicked', 0);
            this.click(function() {
                var data = $(this).data();
                var tc = data.toggleclicked;
                $.proxy(funcs[tc], this)();
                data.toggleclicked = (tc + 1) % 2;
            });
            return this;
        };
    }(jQuery));

    // Select $_GET on client side

    function $_GET(param) {
        var vars = {};
        window.location.href.replace( location.hash, '' ).replace( 
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
            }
        );
    
        if ( param ) {
            return vars[param] ? vars[param] : null;	
        }
        return vars;
    }

    var $_GET = $_GET(),
        profile = $_GET['profile'];

    // Smooth scrolling to page anchor on click
    
    // $('a[href^="#"]').click(function(){  
    //     // var id = $(this).attr("href");
    //     // var offset = $(id).offset().top 
    //     var n = $(document).height();
    //     $('html, body').animate({ scrollTop: n }, 50);
    // }); 

    // Youtube API Default

    /* ---------- 3 : Homepage ---------- */

    $(document).ready(function() {
        $('.navbar-brand img').css({'opacity':'1'}).addClass('animate__animated animate__fadeInLeft');
    });

    /* ---------- 4 : Vocabulary ---------- */ 

    // 4.1 : Numbers

    // 4.2 : Cooking

    // 4.3 : Courtesy

    $('.tagalog-basics-courtesy').hover(function() {
        $(this).nextAll().toggle();
    });

    /* ---------- 5 : Portfolio ---------- */
    
    $('.section-portfolio').mouseenter(function() {
        $(this).children('.aside-portfolio').addClass('aside-portfolio-display animate__animated animate__zoomIn');
    }).mouseleave(function() {
        $(this).children('.aside-portfolio').removeClass('aside-portfolio-display animate__animated animate__zoomIn');
    });

    $(document).ready(function(){
        setTimeout(function() {
            $('.underline-title-portfolio').css({'width':'200px', 'transition':'width 1s ease'});
        }, 800);
    });

    /* ---------- 6 : About us ---------- */

    // Left section
    if (profile == 'May') {
        // Profile picture
        $('.picture-Augustin').addClass('picture-none').removeClass('picture-display');
        $('.picture-May').addClass('picture-display').removeClass('picture-none');
        // Select profile link
        $('.butterfly-picture').addClass('picture-none').removeClass('picture-display');
        $('.flower-picture').addClass('picture-display').removeClass('picture-none');
        $('.profile-May').css({'color': '#9e4555', 'text-shadow': '2px 2px 2px black'});
        // Description text
        $('.description-Augustin').addClass('text-none').removeClass('text-display');
        $('.description-May').addClass('text-display').removeClass('text-none');
        // Social medias
        $('.socials-Augustin').addClass('socials-none').removeClass('socials-display');
        $('.socials-May').addClass('socials-display').removeClass('socials-none');
    }
    else if (profile == 'Augustin') {
        // Profile picture
        $('.picture-May').addClass('picture-none').removeClass('picture-display');
        $('.picture-Augustin').addClass('picture-display').removeClass('picture-none');
        // Select profile link 
        $('.flower-picture').addClass('picture-none').removeClass('picture-display');
        $('.butterfly-picture').addClass('picture-display').removeClass('picture-none');
        $('.profile-Augustin').css({'color': '#3a6d97', 'text-shadow': '2px 2px 2px black'});
        // Description text
        $('.description-May').addClass('text-none').removeClass('text-display');
        $('.description-Augustin').addClass('text-display').removeClass('text-none');
        // Social medias 
        $('.socials-May').addClass('socials-none').removeClass('socials-display');
        $('.socials-Augustin').addClass('socials-display').removeClass('socials-none');
    }

    // Right section
    $('.menu-aboutUs li').mouseenter(function() {
        console.log('entré');
        // // $(this).removeClass('animate__animated animate__bounce');
        // $(this).addClass('animate__animated animate__fadeIn');
    }).mouseleave(function() {
        console.log('sorti');
        // $(this).removeClass('animate__animated animate__fadeIn');
        // // $(this).addClass('animate__animated animate__fadeOutRight');
    });

    $('.what-we-love button').clickToggle(function() {
        $(this).siblings('article').addClass('d-block animate__animated animate__fadeIn');
    }, function() {
        $(this).siblings('article').removeClass('d-block animate__animated animate__fadeIn');
    });

    /* ---------- 8 : Travels ---------- */

    // Carousel animations
    $(".carousel-item").first().addClass("active");
    $("ol.carousel-indicators").find("li").eq(0).addClass("active");

    // Choose category animations on pictures hover 

    $('.section-choose-category div').mouseenter(function() {
        $(this).children('article').animate({opacity: 1});
        $(this).css({'transform':'scale(1.05)', 'transition':'transform 0.4s ease'});
    }).mouseleave(function() {
        $(this).children('article').animate({opacity: 0});
        $(this).css({'transform':'scale(1)', 'transition':'transform 0.4s ease'});
    });

    /* ---------- 9 : Footer ---------- */

    $('.show-admin-btn i').mouseenter(function() {
        $(this).parent().siblings('.info-form-admin').removeClass('d-none animate__animated animate__fadeOut');
        $(this).parent().siblings('.info-form-admin').addClass('d-block animate__animated animate__fadeIn');
    }).mouseleave(function() {
        $(this).parent().siblings('.info-form-admin').removeClass('d-block animate__animated animate__fadeIn');
        $(this).parent().siblings('.info-form-admin').addClass('d-none animate__animated animate__fadeOut');
    });

    $('.show-admin-btn i').click(function() {
        $('.login-admin-form').css({'display':'block'}).removeClass('animate__animated animate__zoomOut').addClass('animate__animated animate__zoomIn');
        $(this).parent().siblings('.info-form-admin-2').removeClass('d-none animate__animated animate__fadeOutRight');
        $(this).parent().siblings('.info-form-admin-2').addClass('d-block animate__animated animate__fadeInRight');
    });

    $('.info-form-admin-2').click(function() {
        $('.login-admin-form').removeClass('animate__animated animate__zoomIn').addClass('animate__animated animate__zoomOut');
        setTimeout(function() {
            $('.login-admin-form').css({'display':'none'});
        }, 700);
        $(this).hide
        $(this).removeClass('d-none animate__animated animate__fadeInRight');
        $(this).addClass('d-block animate__animated animate__fadeOutRight');
    });

});