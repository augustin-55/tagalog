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
        <div>
            <h5><?php echo $donnees['title']; ?></h5>
            <p><?php echo $donnees['description']; ?></p>
        </div>
        <div class="section-previous-travels">
            <a href="travels.php?category=<?php echo $donnees['category_id']; ?>"><i class="fas fa-arrow-left"></i> Previous</a>
        </div>
        <?php } ?>
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>