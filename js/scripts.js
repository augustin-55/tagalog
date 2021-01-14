$(function() {

    // Start test
    console.log('It is ok man');

    /*
        0 : Var
        1 : Main functions
        2 : Homepage
        3 : Vocabulary
            3.1 : Numbers
            3.2 : Cooking
            3.3 : Courtesy
        4 : Training
        5 : About us
        6 : Portfolio
        7 : Travels

    */ 

    /* ---------- 0 : Var ---------- */ 

    /* ---------- 1 : Main functions ---------- */ 

    /* ---------- 2 : Homepage ---------- */

    $(document).ready(function() {
        $('.navbar-brand img').css({'opacity':'1'}).addClass('animate__animated animate__fadeInLeft');

        $('.underline-title-portfolio').css({'width':'200px', 'transition':'width 1s ease'});
    });

    /* ---------- 3 : Vocabulary ---------- */ 

    // 3.1 : Numbers

    // 3.2 : Cooking

    // 3.3 : Courtesy

    $('.tagalog-basics-courtesy').hover(function() {
        $(this).next().toggle();
    });

    /* ---------- 6 : Portfolio ---------- */
    
    $('.section-portfolio').mouseenter(function() {
        $(this).children('.aside-portfolio').addClass('aside-portfolio-display animate__animated animate__zoomIn');
    }).mouseleave(function() {
        $(this).children('.aside-portfolio').removeClass('aside-portfolio-display animate__animated animate__zoomIn');
    });

    /* ---------- 7 : Travels ---------- */

    $('.linkToReality').click(function() {
        $(this).parents('article').next().toggleClass('display-article');
    });
});