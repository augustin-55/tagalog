$(function() {

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

    // Homepage
    $('.button-admin-home').on('click', function() {
        $(this).next().toggle('slide', 400);
    });

    $(document).ready(function() {
        $('.navbar-brand img').css({'opacity':'1'});
    });

    // Buttons
    $('.add-pictures-link').clickToggle(function() {
        $(this).next().addClass('d-block');
    }, function() {
        $(this).next().removeClass('d-block');
    });

    // Add picture - input file
    var path = $('input[name="path_pictures"]').val();

    $('.btn-delete-picture').click(function() {
        var original_picture = $(this).prev().children('.span-no-choice').text();
        $('input[type=file').val(''); 
        $(this).prev().find('.span-file-chosen').html('');
        $(this).prev().find('.span-no-choice').show();
        if (valAttr == 'picture' || valAttr == 'thumbnail') {
            $(this).parent().siblings('img').attr('src', path+''+original_picture);
        }
        else {
            $(this).siblings('img').attr('src', path+''+original_picture);
        }
    });

    $('input[type="file"]').on('change', function(e) {
        var valAttr = $(this).attr('name');
        if (valAttr == 'picture' || valAttr == 'thumbnail') {
            $(this).siblings('.span-no-choice').hide();
            var file = e.target.files[0].name;
            $(this).siblings('.span-file-chosen').html(file);
            $('.display-pictures-update').children('img').attr('src', path+''+file);
        }
        else {
            $(this).siblings('.span-no-choice').hide();
            var file = e.target.files[0].name;
            $(this).siblings('.span-file-chosen').html(file);
            $(this).parent().siblings('img').attr('src', path+''+file);
        }
    });

    // Update picture - if picture is not found : error
    $('.display-pictures-update').children('img').on('error', function() {
        $(this).attr('src', '../assets/pictures/errors/error404.jpg');
    });

    $('.other-pictures-update').children('div').children('img').on('error', function() {
        $(this).attr('src', '../assets/pictures/errors/error404.jpg');
    });

    // Hide pictures with false link or no link in display tables
    $(document).ready(function() {
        $('img').on('error', function() {
            $(this).attr('src');
        });
    });

    // Display tables 

    $('.table-mTravels table').DataTable();
    $('.table-mPortfolio table').DataTable();
    $('.table-mVocabulary table').DataTable();
    $('.table-mAboutUs table').DataTable();

});