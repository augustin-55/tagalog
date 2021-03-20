<?php
    $current_page = 'portals';
    include('assets/header-admin.php');
    session_destroy();
?>

<section class="main-container-admin-portal main-container">
    <section class="section-confirm-message">
        <article>
            <img src="../assets/pictures/portals/confirm-admin.png" alt="Confirm picture">
            <h3>Success... <i class="far fa-grin-hearts"></i></h3>
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="../index.php" method="POST">
            <input type="submit" value="Confirm" name="session-destroy">
        </form>
    </section>
</section>

<?php include('assets/footer-admin.php'); ?>