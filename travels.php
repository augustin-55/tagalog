<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'travels';
    include('assets/header.php');
?>

<!-- Main body : Travels -->
<div class="main-container main-container-travels">
    <h2>Our travels together</h2>
    <section class="section-articles-travels">
        <div class="section-carousel-travels">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/pictures/travels/content/picture1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="assets/pictures/travels/content/picture2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="assets/pictures/travels/content/picture3.jpg" alt="Third slide">
                    </div>
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
        <div>
            <p>In this part of the wesbite, we can find all the places we discover and recommand to each one to visit atleast one time
                on his life. We enjoyed so much and we share these experiences here ! "The use of traveling is to regulate imagination
                with reality, and instead of thinking of how things may be, see them as they are."
            </p>
        </div>
        <div class="section-previous-travels">
            <a href="travel-categories.php"><i class="fas fa-arrow-left"></i> Previous</a>
        </div>
        <div class="section-articles-travels">
            <aside>
                <p>Other categories</p>
                <ul>
                    <?php while($donnees = $categories_travel->fetch()) { ?>
                    <li><a href="#"><?php echo $donnees['category']; ?></a></li>
                    <?php } ?>
                </ul>
            </aside>
            <section>
                <?php while($donnees = $travels->fetch()) { ?>
                <article>
                    <img src="assets/pictures/<?php echo $donnees['picture'];?>" alt="<?php echo $donnees['title']; ?>">
                    <h5><?php echo $donnees['title']; ?></h5>
                    <p><?php echo $donnees['description']; ?></p>
                </article>
                <?php } ?>
            </section>
        </div>
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>