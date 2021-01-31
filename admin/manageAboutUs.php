<?php include('assets/header-admin.php'); ?>

<section class="main-container-mAboutUs main-container">
    <div class="menu-mAboutUs">
        <ul>
            <li><a href="?manageAboutUs=meeting">Our meeting</a></li>
            <li><a href="?manageAboutUs=countries">Our Countries</a></li>
            <li><a href="?manageAboutUs=songs">Our favorite songs</a></li>
        </ul>
    </div>
    <div class="content-mPortfolio">
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