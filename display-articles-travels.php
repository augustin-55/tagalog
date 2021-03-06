<!-- Header -->
<?php
    $current_page = 'display-article-travel';
    require('assets/functions/functions.php');
    include('assets/header.php');
?>

<!-- Main body : Travels -->
<div class="main-container main-container-travels">
    <section class="section-display-article">
        <?php while($donnees = $display_article->fetch()) { ?>
        <div class="div-display-article">
            <h5><?php echo $donnees['title']; ?></h5>
            <img src="assets/pictures/travels/content/<?php echo $donnees['picture']; ?>" alt="<?php echo $donnees['title']; ?>">
            <div class="div-display-pictures">
                <img src="assets/pictures/travels/content/<?php echo $donnees['picture']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $donnees['picture_1']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $donnees['picture_2']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $donnees['picture_3']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $donnees['picture_4']; ?>">
            </div>
            <div class="div-description-article"><?php echo $donnees['description']; ?></div>
        </div>
        <div class="section-previous-travels">
            <a href="travels.php?category=<?php echo $donnees['category_id']; ?>"><i class="fas fa-arrow-left"></i> Previous</a>
        </div>
        <?php } ?>
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>