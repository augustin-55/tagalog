<?php include('assets/header-admin.php'); ?>

<section class="main-container-update main-container">
<?php if ($_GET['update'] == 'travels') {
    include_once('assets/manageTravels/update-travels.php');
}
else if ($_GET['update'] == 'portfolio') {
    include_once('assets/manageTravels/update-portfolio.php');
}

?>
</section>

<?php include('assets/footer-admin.php'); ?>