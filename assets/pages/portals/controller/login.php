<?php
    require('../../../../assets/functions/functions.php');

    if (isset($username) && isset($password)) {

        if ($username != '' && $password != '') {

            while ($data = $admin->fetch()) {
                var_dump($data);

                if ($data[0] != 0) {
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                        print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../confirm-portal.php?message=You\'re now connected to the administration part of the website !\")');</script>");
                    }
                    else {
                        print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../error-portal.php?message=May if it\'s you, please take contact with me very soon :)\")');</script>");
                    }
            }

            // $username = $_POST['username'];
            // $password = $_POST['password'];
            // $stmt = $bdd->prepare("SELECT * FROM admin WHERE username=? AND password=?");
            // $stmt->execute([$username], [$password]); 
            // $user = $stmt->fetch();
            // if ($user) {
            //     // le nom d'utilisateur existe déjà
            //     echo 'tu es bien là FDP';
            // } else {
            //     // le nom d'utilisateur n'existe pas
            //     echo 'NTM';
            // } 

            // while ($donnees = $admin->fetch()) {
            //     $username = $donnees['username'];
            //     $password = $donnees['password'];

            //     var_dump($donnees);
            // }

            // if () {
            //     echo 'tu es bien là FDP';
            // }
            // else {
            //     echo 'NTM';
            // }

            // if ($username == $_POST['username'] && $password == $_POST['password']) {
            //     $_SESSION['username'] = $username;
            //     $_SESSION['password'] = $password;
            //     // print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../confirm-portal.php?message=You\'re now connected to the administration part of the website !\")');</script>");
            // }
            // else {
            //     // print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../error-portal.php?message=May if it\'s you, please take contact with me very soon :)\")');</script>");
            // }
        }
        else {
            print("<script type=\"text/javascript\">setTimeout('location=(\"../../../../error-portal.php?message=You must fill all the fields there...\")');</script>");
        }
    }