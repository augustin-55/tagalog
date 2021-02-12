<?php include('assets/header-admin.php'); ?>

<section class="main-container-mTravels main-container">
    <div class="menu-mTravels">
        <ul>
            <li><a href="?manageTravels=category">Categories</a></li>
            <li><a href="?manageTravels=content">Travels articles</a></li>
        </ul>
    </div>
    <div class="content-mTravels">
        <?php
            if (isset($_GET['manageTravels'])) {
                if ($_GET['manageTravels'] == 'category') {
                    include_once('assets/manageTravels/category-travels.php');
                }
                else if ($_GET['manageTravels'] == 'content') {
                    include_once('assets/manageTravels/content-travels.php');
                }
            }
            else {
                include_once('assets/manageTravels/content-travels.php');
            }
        ?>
    </div>
</section>

<?php include('assets/footer-admin.php'); ?>