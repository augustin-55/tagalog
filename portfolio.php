<?php
    $current_page = 'portfolio';
    include('assets/header.php');
    $sql = 'SELECT * FROM portfolio';
    $req = $bdd->query($sql); 
?>

<!-- Main body : Portfolio -->
<div class="main-container-portfolio">
    <?php while ($portfolio = $req->fetch()) { ?>
    <section class="section-portfolio">
        <article>
            <img class="picture-portfolio" src="assets/pictures/portfolio/<?php echo $portfolio['picture']; ?>" alt="<?php echo $portfolio['title']; ?>">
        </article>
        <article class="aside-portfolio">
            <div class="division-bar-portfolio"></div>
            <p class="title-portfolio"><?php echo $portfolio['title']; ?></p>
            <p class="description-portfolio"><?php echo $portfolio['description']; ?></p>
        </article>
    </section>
    <?php }; $req->closeCursor(); ?>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>