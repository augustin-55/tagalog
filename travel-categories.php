<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'travels';
    include('assets/header.php');
?>

<!-- Main body : Wish List -->
<div class="main-container main-container-travels">
    
    <section class="section-choose-category">
        <form method="POST">
            <section>
                <?php while($donnees = $categories_travel->fetch()) { ?>
                <div>
                    <img src="assets/pictures/travels/categories/<?php echo $donnees['picture']; ?>" alt="<?php echo $donnees['category']; ?>">
                    <article>
                        <p><?php echo $donnees['category']; ?></p>
                        <div class="bar-categories-travel"></div>
                        <a href="travels.php?category=<?php echo $donnees['id']; ?>">Take a look...</a>
                    </article>
                </div>
                <?php } ?>
            </section>
        </form>
    </section>

</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>