<?php include('assets/header-admin.php'); ?>

<section class="main-container-mPortfolio main-container">
    <div class="menu-mPortfolio">
        <ul>
            <li><a href="?managePortfolio=category">Categories</a></li>
            <li><a href="?managePortfolio=pictures">Pictures & stories</a></li>
        </ul>
    </div>
    <div class="content-mPortfolio">
        <?php
            if (isset($_GET['managePortfolio'])) {
                if ($_GET['managePortfolio'] == 'category') {
                    include_once('assets/managePortfolio/category-portfolio.php');
                }
                else if ($_GET['managePortfolio'] == 'pictures') {
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