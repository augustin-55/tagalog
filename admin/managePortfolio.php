<?php include('assets/header-admin.php'); ?>

<section class="main-container-mPortfolio main-container">
    <div class="content-mPortfolio">
        <?php
            if (isset($_GET['managePortfolio'])) {
                if ($_GET['managePortfolio'] == 'category') {
                    include_once('assets/managePortfolio/category-portfolio.php');
                }
                else if ($_GET['managePortfolio'] == 'content') {
                    include_once('assets/managePortfolio/content-portfolio.php');
                }
            }
            else {
                include_once('assets/managePortfolio/content-portfolio.php');
            }
        ?>
    </div>
</section>

<?php include('assets/footer-admin.php'); ?>