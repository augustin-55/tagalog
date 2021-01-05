<!-- Header -->
<?php
    $current_page = 'wishList';
    include('assets/header.php');

    $sql = $bdd->prepare("SELECT * FROM dreamplace LEFT JOIN feedback ON dreamplace.id = feedback.id_dreamplace");
    $sql->execute(); 
?>

<!-- Main body : Wish List -->
<div class="main-container main-container-wishList">
    <h2>Wish List</h2>
    <section class="dream-section-list">
        
        <?php while ($dream = $sql->fetch()) { ?>
            <div class="flex-wishList">
                <article class="dream-article">
                    <img src="assets/pictures/wishList/<?php echo $dream['picture'] ?>" alt="<?php echo $dream['name']; ?>">
                    <div class="dreamPlace-about">
                        <div class="separate-dreams"></div>
                        <p class="dream-name"><?php echo $dream['name']; ?></p>
                        <p class="dream-about"><?php echo $dream['description']; ?></p>
                        <a href="#" class="linkToReality linkToReality-<?php echo $dream['name'] ?>">Our experience :)</a>
                    </div>
                </article>
                <article class="reality-article">
                    <img src="assets/pictures/lorem/<?php echo $dream['picture_one'] ?>" alt="<?php echo $dream['name']; ?>">
                    <div class="realityPlace-about">
                        <div class="separate-reality"></div>
                        <p class="reality-about"><?php echo $dream['experience']; ?></p>
                    </div>
                </article>
            </div>
        <?php } $sql->closeCursor(); ?>
        
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>