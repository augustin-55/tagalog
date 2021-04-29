<!-- Header -->
<?php
    $current_page = 'display-article-travel';
    require('assets/functions/functions.php');
    include('assets/header.php');
?>

<!-- Main body : Travels -->
<div class="main-container main-container-travels">
    <section class="section-display-article">
        <?php while($data = $display_article->fetch()) { ?>
        <div class="div-display-article">
            <h5><?php echo $data['title']; ?></h5>
            <img src="assets/pictures/travels/content/<?php echo $data['picture']; ?>" alt="<?php echo $data['title']; ?>">
            <div class="div-display-pictures">
                <img src="assets/pictures/travels/content/<?php echo $data['picture']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $data['picture_1']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $data['picture_2']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $data['picture_3']; ?>">
                <img src="assets/pictures/travels/content/<?php echo $data['picture_4']; ?>">
            </div>
            <div class="div-description-article">
                <p class="p-description-article"><?php echo $data['description']; ?></p>
                <div>
                    <p><?php echo $data['addBy']; ?>.</p>

                    <img src="assets/pictures/yes.jpg" alt="profile picture - <?php echo $data['addBy']; ?>">
                    <p><?php echo $data['addDate']; ?></p>
                </div>
            </div>
        </div>
        <div class="section-previous-travels">
            <a href="travels.php?category=<?php echo $data['category_id']; ?>"><i class="fas fa-arrow-left"></i> Previous</a>
        </div>
        <?php } ?>
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>