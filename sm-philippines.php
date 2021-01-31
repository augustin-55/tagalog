<?php
    require('assets/functions/functions.php');
    $current_page = 'aboutUs';
    include('assets/header.php');
?>

<section class="main-section-sm-countries">
    <section class="section-presentation-countries">
    <?php while ($donnees = $smPhilippines->fetch()) { ?>
        <article>
            <div class="left-part-article">
                <div class="point-left-article"></div>
            </div>
            <div class="right-part-article">
                <img src="assets/pictures/lorem/<?php echo $donnees['picture']; ?>" alt="<?php echo $donnees['title']; ?>">
                <h5><?php echo $donnees['title']; ?></h5>
                <p><?php echo $donnees['description']; ?></p>
            </div>
        </article>
    <?php } ?>
    </section>
    <section class="btn-sm-countries">
        <a href="#">Go on top</a>
        <a href="aboutUs.php?page=countries">Previous</a>
    </section>
</section>

<?php include('assets/footer.php'); ?>