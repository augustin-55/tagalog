<?php
    if (isset($_GET['country'])) {
        $countrySmSelect = $smPhilippines;
        var_dump($_GET);
    }
    else {
        $countrySmSelect = $smAll;
        var_dump($_GET);
    }

