<?php

    require('../../../../assets/functions/functions.php');

    var_dump($_POST);

    if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] != '' && $_POST['password'] != '') {
            echo 'rempli';

            $_SESSION['username'] == 'prout';
            $_SESSION['password'] == 'prout 2';

            var_dump($_SESSION);

            // if ($_SESSION['username'] == 'u') {
            //     print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../admin/index.php\")');</script>");
            // }
        }
        else {
            print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../admin/index.php\")');</script>");
        }
    }
    else {
        print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../admin/index.php\")');</script>");
    }