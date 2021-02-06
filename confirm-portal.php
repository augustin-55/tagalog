<?php
    $current_page = 'portals';
    include('assets/header.php');
?>

<section class="main-container-admin-portal main-container">
    <section class="section-confirm-message">
        <article>
            <img src="assets/pictures/portals/confirm.png" alt="Confirm picture">
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="admin/index.php" method="POST">
            <input type="submit" value="Enter in admin part">
        </form>
    </section>
</section>

<?php include('assets/footer.php'); ?>