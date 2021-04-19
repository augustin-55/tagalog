<?php
    require('assets/functions/functions.php');
    $current_page = 'aboutUs';
    include('assets/header.php');
?>

<section class="main-section-sm-countries">
    <section class="section-presentation-countries">
    <?php while ($data = $smPhilippines->fetch()) { ?>
        <article>
            <div class="left-part-article">
                <div class="point-left-article"></div>
                <div class="bar-left-article"></div>
            </div>
            <div class="right-part-article">
                <img src="assets/pictures/about-us/countries/<?php echo $data['picture']; ?>" alt="<?php echo $data['title']; ?>">
                <div>
                    <h5><?php echo $data['title']; ?></h5>
                    <p><?php echo $data['description']; ?></p>
                </div>
            </div>
        </article>
    <?php } ?>
    </section>
    <section class="btn-sm-countries">
        <a href="#"><i class="fas fa-arrow-circle-up"></i></a>
        <a href="aboutUs.php?page=countries"><i class="fas fa-arrow-circle-left"></i></a>
    </section>
</section>

<?php include('assets/footer.php'); ?>