<?php
    $current_page = 'portals';
    include('assets/header.php');
?>

<section class="main-container-admin-portal main-container">
    <section class="section-error-message">
        <article>
            <img src="assets/pictures/portals/error.png" alt="Error picture">
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="index.php" method="POST">
            <input type="submit" value="Previous">
        </form>
    </section>
</section>

<?php include('assets/footer.php'); ?>