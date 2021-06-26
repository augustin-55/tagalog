<?php include('assets/header-admin.php'); ?>

<section class="main-container-mAboutUs main-container">
    <div class="content-mAboutUs">
        <?php
            if (isset($_GET['manageAboutUs'])) {
                if ($_GET['manageAboutUs'] == 'meeting') {
                    include_once('assets/manageAboutUs/meeting-aboutUs.php');
                }
                if ($_GET['manageAboutUs'] == 'countries') {
                    include_once('assets/manageAboutUs/countries-aboutUs.php');
                }
                else if ($_GET['manageAboutUs'] == 'songs') {
                    include_once('assets/manageAboutUs/songs-aboutUs.php');
                }
            }
            else {
                include_once('assets/manageAboutUs/meeting-AboutUs.php');
            }
        ?>
    </div>
</section>

<?php include('assets/footer-admin.php'); ?>