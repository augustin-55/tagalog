<?php include('assets/header-admin.php'); ?>

<section class="main-container-admin-portal main-container">
    <section class="section-error-message">
        <article>
            <img src="../assets/pictures/portals/error-admin.png" alt="Error picture">
            <h3>There's something wrong...</h3>
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="<?php echo $_SERVER['HTTP_REFERER']; ?>" method="POST">
            <input type="submit" value="Previous">
        </form>
    </section>
</section>

<?php include('assets/footer-admin.php'); ?>