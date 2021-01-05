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
        5 : Bucket List

    */ 

    /* ---------- 0 : Var ---------- */ 

    /* ---------- 1 : Main functions ---------- */ 

    /* ---------- 2 : Homepage ---------- */ 

    /* ---------- 3 : Vocabulary ---------- */ 

    // 3.1 : Numbers

    // 3.2 : Cooking

    // 3.3 : Courtesy

    $('.tagalog-basics-courtesy').hover(function() {
        $(this).next().toggle();
    });

    /* ---------- 5 : Wish List ---------- */

    $('.linkToReality').click(function() {

        $(this).parents('article').next().toggleClass('display-article');

    });


});