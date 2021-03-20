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
       <section>
           <h4>10 things about us</h4>
           <img src="#" alt="#">
           <article>
               <ul>
                   <li>1 : </li>
                   <li>2 : </li>
                   <li>3 : </li>
                   <li>4 : </li>
                   <li>5 : </li>
                   <li>6 : </li>
                   <li>7 : </li>
                   <li>8 : </li>
                   <li>9 : </li>
                   <li>10 : </li>
               </ul>
           </article>
       </section>
        <section>
            <article>
                <img src="assets/pictures/lorem/lorem.jpg" alt="couple picture home">
            </article>
            <article>
                <p>We know each other for <?php echo $nbDayRelationship; ?> months now, and we're in couple for <?php echo $nbDayLove; ?> months</p>
            </article>
        </section> 
   </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>