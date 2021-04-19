<!-- Header -->
<?php
    $current_page = 'travels';
    require('assets/functions/functions.php');
    include('assets/header.php');
    $display_category = $bdd->query('SELECT category FROM categories_travel WHERE id = "'.$_GET['category'].'"');
    $dataC = $display_category->fetch();
?>

<!-- Main body : Travels -->
<div class="main-container main-container-travels">
    <section class="main-articles-travels">
        <div class="section-carousel-travels">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php while($data = $carousel_travels->fetch()) { ?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/pictures/travels/content/<?php echo $data['picture']; ?>" alt="<?php echo $data['title']; ?> - Carousel">
                    </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="section-intro-travels">
            <p>In this part of the website, we can find all the places we discover and recommand to each one to visit atleast one time
                on his life. We enjoyed so much and we share these experiences here !<br>"The use of traveling is to regulate imagination
                with reality, and instead of thinking of how things may be, see them as they are."
            </p>
        </div>
        <div class="section-previous-travels">
            <a href="travel-categories.php"><i class="fas fa-arrow-left"></i> Previous</a>
        </div>
        <div class="section-title-travels">
            <div class="bar-title-travels"></div>
                <h4>See all articles - <?php echo $dataC['category']; ?></h4>
            <div class="bar-title-travels"></div>
        </div>
        <div class="section-articles-travels">
            <section>
                <?php while($data = $travels->fetch()) { ?>
                <article>
                    <div>
                        <img src="assets/pictures/travels/content/<?php echo $data['picture']; ?>" alt="<?php echo $data['title']; ?>">
                        <span><?php echo $data['addDate']; ?></span>
                    </div>
                    <div>
                        <h5><?php echo $data['title']; ?></h5>
                        <p><?php echo $data['description']; ?></p>
                        <a href="display-articles-travels.php?article=<?php echo $data[0]; ?>"><i class="far fa-hand-point-right"></i> See more pictures...</a>
                    </div>
                </article>
                <?php } ?> 
            </section>
        </div>
    </section>
    <div>
        <p></p>
    </div>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>