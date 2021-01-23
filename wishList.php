<!-- Header -->
<?php
    $current_page = 'wishList';
    include('assets/header.php');
?>

<!-- Main body : Wish List -->
<div class="main-container main-container-wishList">
    <h2>Our travels together</h2>
    <section class="dream-section-list">
        
        <?php while ($donnees = $dream->fetch()) { ?>
            <div class="flex-wishList">
                <article class="dream-article">
                    <img src="assets/pictures/wishList/<?php echo $donnees['picture'] ?>" alt="<?php echo $donnees['name']; ?>">
                    <div class="dreamPlace-about">
                        <div class="separate-dreams"></div>
                        <p class="dream-name"><?php echo $donnees['name']; ?></p>
                        <p class="dream-about"><?php echo $donnees['description']; ?></p>
                        <a href="#" class="linkToReality linkToReality-<?php echo $donnees['name'] ?>">Our experience :)</a>
                    </div>
                </article>
                <article class="reality-article">
                    <img src="assets/pictures/lorem/<?php echo $donnees['picture_one'] ?>" alt="<?php echo $donnees['name']; ?>">
                    <div class="realityPlace-about">
                        <div class="separate-reality"></div>
                        <p class="reality-about"><?php echo $donnees['experience']; ?></p>
                    </div>
                </article>
            </div>
        <?php } ?>
        
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>