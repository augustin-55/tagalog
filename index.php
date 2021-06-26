<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'index';
    include('assets/header.php');
    // var_dump($_SESSION);
?>

<!-- Main body : Homepage -->
<div class="main-container-home">
    <section class="section-1-home">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/pictures/home/luzon.jpg" class="d-block w-100" alt="Luzon Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cagbalete</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/pictures/home/verdun.jpg" class="d-block w-100" alt="Verdun">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Verdun</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/pictures/home/visayas.jpg" class="d-block w-100" alt="Visayas Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Boracay</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/pictures/home/paris.jpg" class="d-block w-100" alt="Mindanao Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Paris</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/pictures/home/mindanao.jpg" class="d-block w-100" alt="Mindanao Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dahican</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/pictures/home/mindanao.jpg" class="d-block w-100" alt="Mindanao Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nancy</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section class="intro-text-home">
            <!-- <p><strong class="quote">"</strong>  <strong class="quote">"</strong></p> -->
        </section>
    </section>
    <section class="section-2-home">
        <section class="section-thingsAboutUs-home">
           <h4>10 things about us</h4>
           <!-- <img src="#" alt="#"> -->
           <span>10</span>
           <article>
               <ul>
                   <li>1 : May is afraid by cockroaches</li>
                   <li>2 : I'm afraid by spiders</li>
                   <li>3 : May likes avocado with cream</li>
                   <li>4 : I like avocado with vinegar</li>
                   <li>5 : May's working so much</li>
                   <li>6 : I drink Coca-Cola in computer racks</li>
                   <li>7 :</li>
                   <li>8 :</li>
                   <li>9 : But May is a wonderful girlfriend</li>
                   <li>10 : And I'm a handsome boyfriend.</li>
               </ul>
           </article>
        </section>
        <section class="section-intro-home">
            <article>
                <img src="assets/pictures/home/couple-picture.jpg" alt="couple picture home">
            </article>
            <article>
                <p>We know each other for <?php echo $nbDayRelationship; ?> months now, and we're in couple for <?php echo $nbDayLove; ?> months</p>
                <p>In venenatis lacus vitae consequat accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer quis velit massa. Etiam finibus eros quis felis sodales, nec blandit nisl tempor. Phasellus sed dictum augue. Nulla facilisis, libero in pulvinar placerat, diam purus blandit felis, sed convallis velit turpis vitae quam. Maecenas aliquet felis vel nisi consectetur pretium.</p>
            </article>
        </section> 
   </section>
   <section class="section-3-home">
       <h4>Latest articles...</h4>
        <div class="d-flex justify-content-center">
            <section class="section-display-articles-home">
            <article>
                <?php while ($data = $portfolio_home->fetch()) { ?>
                <div>
                    <img src="assets/pictures/travels/content/<?php echo $data ['picture']; ?>" alt="Article <?php echo $data['title']; ?> from portfolio">
                    <div class="description-articles-home">
                        <h5><?php echo $data['title']; ?></h5>
                        <p><?php echo substr($data['description'], 0, 100).'...'; ?><a href="#"> See more</a></p>
                    </div>
                </div>
                <?php } ?>
            </article>
            <p class="see-more-home">Find more in <span><a href="travel-categories.php">travels</a><a href="travel-categories.php" class="hover-sm-home">travels</a></p>
            </section>
            <section class="section-display-articles-home">
                <article>
                    <?php while ($data = $travels_home->fetch()) { ?>
                    <div>
                        <img src="assets/pictures/portfolio/<?php echo $data['picture']; ?>" alt="Article <?php echo $data['title']; ?> from travels">
                        <div class="description-articles-home">
                            <h5><?php echo $data['title']; ?></h5>
                            <p><?php echo substr($data['description'], 0, 100).'...'; ?><a href="display-articles-travels.php">See more</a></p>
                        </div>
                    </div>
                    <?php } ?>
                </article>
                <p class="see-more-home">Find more in <span><a href="portfolio.php">portfolio</a><a href="portfolio.php" class="hover-sm-home">portfolio</a></p>
            </section>
        </div>
   </section>
   <section class="section-4-home">
        <article>
            <h4>The most popular...</h4>
            <div>
                <img src="#" alt="#">
                <p>Title</p>
            </div>
        </article>
        <article>
            <h4>Our latest videos</h4>
        </article>
   </section>
   <section class="section-5-home">
        <h4>Meet us on our social medias</h4>
        <article>
            <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"><i class="fab fa-instagram-square"></i>Instagram</a>
            <a href="#"><i class="fab fa-youtube"></i>Youtube</a>
        </article>
   </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>
