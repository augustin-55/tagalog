<?php include('assets/header-admin.php'); ?>

<section class="main-container-admin-portal main-container">
    <section class="section-confirm-message">
        <article>
            <img src="../assets/pictures/portals/confirm.png" alt="Confirm picture">
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="managePortfolio.php?managePortfolio=<?php echo $_GET['managePortfolio'] ?>" method="POST">
            <input type="submit" value="Confirm">
        </form>
    </section>
</section>

<?php include('assets/footer-admin.php'); ?>