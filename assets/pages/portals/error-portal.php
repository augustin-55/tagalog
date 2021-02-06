<?php
    $current_page = '';
    include('../../header.php');
?>

<section class="main-container-admin-portal main-container">
    <section class="section-error-message">
        <article>
            <img src="../assets/pictures/portals/error.png" alt="Error picture">
            <p><?php echo $_GET['message']; ?></p>
        </article>
        <form action="managePortfolio.php?managePortfolio=<?php echo $_GET['managePortfolio']; ?>" method="POST">
            <input type="submit" value="Previous">
        </form>
    </section>
</section>

<?php include('../../footer.php'); ?>