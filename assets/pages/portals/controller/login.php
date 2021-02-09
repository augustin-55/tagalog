<?php

    require('../../../../assets/functions/functions.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] != '' && $_POST['password'] != '') {

            while ($donnees = $admin->fetch()) {
                $username = $donnees['username'];
                $password = $donnees['password'];
            }

            if ($username == $_POST['username'] && $password == $_POST['password']) {
                print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../confirm-portal.php?message=You\'re now connected to the administration part of the website !\")');</script>");
            }
            else {
                print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../error-portal.php?message=Your username or password seems wrong. May if it\'s you, please take contact with me very soon o.O\")');</script>");
            }
        }
        else {
            print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../error-portal.php?message=You must fill all the fields there...\")');</script>");
        }
    }