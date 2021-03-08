<?php include('assets/header-admin.php'); ?>

<section class="main-container-admin-portal main-container">
    <section class="section-validation-message">
        <h4>Do you really want to delete it ?</h4>
        <button>Obviously not !</button>
        <button>I'm sure</button>
    </section>
    <section class="section-confirm-message">
        <article>
            <img src="../assets/pictures/portals/confirm-admin.png" alt="Confirm picture">
            <h3>Success... <i class="far fa-grin-hearts"></i></h3>
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="<?php echo $_SERVER['HTTP_REFERER']; ?>" method="POST">
            <input type="submit" value="Confirm">
        </form>
    </section>
</section>

<?php include('assets/footer-admin.php'); ?>