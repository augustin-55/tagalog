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
                <?php while($data = $categories_travel->fetch()) { ?>
                <div>
                    <img class="select-category-picture" src="assets/pictures/travels/categories/<?php echo $data['thumbnail']; ?>" alt="display <?php echo $data['category']; ?> page">
                    <article>
                        <p><?php echo $data['category']; ?></p>
                        <div class="bar-categories-travel"></div>
                        <a href="travels.php?category=<?php echo $data['id']; ?>"><i class="fas fa-plane-arrival"></i> Take a look...</a>
                    </article>
                </div>
                <?php } ?>
            </section>
        </form>
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>