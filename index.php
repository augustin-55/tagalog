<!-- Header -->
<?php
    $current_page = 'index';
    include('assets/header.php');
?>

<!-- Main body : Homepage -->
<div class="main-container-home">
    <!-- <img src="assets/pictures/philippines-flag.png" alt="Philippines-Flag" class="flag-picture"> -->
    <div class="flex-row">
        <div class="flex-home">
            <!-- Welcome ! -->
            
            <!-- Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/pictures/luzon.jpg" class="d-block w-100" alt="Luzon Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cagbalete</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="assets/pictures/visayas.jpg" class="d-block w-100" alt="Visayas Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Boracay</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="assets/pictures/mindanao.jpg" class="d-block w-100" alt="Mindanao Island">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dahican</h5>
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
            <!-- Main : Intro -->
            <section class="intro-text-home">
                <p><strong class="quote">"</strong> The use of traveling is to regulate imagination with reality, and instead of thinking of how things may be, see them as they are. <strong class="quote">"</strong></p>
            </section>
            <!-- Main : Philippines -->
            <section class="about-home">
                <h2>About Philippines</h2>
                <div class="flex">
                    <div class="map-about">
                        <img src="assets/pictures/philippines-map" alt="map of Philippines">
                    </div>
                    <div class="description-about">
                        <img src="assets/pictures/philippines-flag-1.png" alt="Flag of Philippines">
                        <p>The Philippines, in long form the Republic of the Philippines (in Filipino : Pilipinas or Republika ng Pilipinas), is a country in Southeast Asia made up of an archipelago of 7,641 islands of which eleven total more than 90% of the land and of which just over 2,000 are inhabited, while about 2,400 islands did not even receive a name.</p>
                        <p>There are three geographic areas : Luçon, Visayas and Mindanao. Luzon is the largest and most northerly island, home to its capital, Manila, and the country's largest city, Quezon City.</p>
                        <p>Manila, is famous for its oceanfront walks and its centuries-old Chinatown, Binondo. Intramuros, the heart of the old town, was a fortified town during the colonial era. This neighborhood is home to the 17th-century Baroque Church of St. Augustin and Fort Santiago, a multi-story military prison and citadel.</p>
                    </div>
                </div>
            </section>
            <!-- Main : France -->
            <section class="about-home">
                <h2>About France</h2>
                <div class="flex">
                    <div class="map-about">
                        <img src="assets/pictures/france-map" alt="map of France">
                    </div>
                    <div class="description-about">
                        <img src="assets/pictures/france-flag.png" alt="Flag of France">
                        <p>The Philippines, in long form the Republic of the Philippines (in Filipino : Pilipinas or Republika ng Pilipinas), is a country in Southeast Asia made up of an archipelago of 7,641 islands of which eleven total more than 90% of the land and of which just over 2,000 are inhabited, while about 2,400 islands did not even receive a name.</p>
                        <p>There are three geographic areas : Luçon, Visayas and Mindanao. Luzon is the largest and most northerly island, home to its capital, Manila, and the country's largest city, Quezon City.</p>
                        <p>Manila, is famous for its oceanfront walks and its centuries-old Chinatown, Binondo. Intramuros, the heart of the old town, was a fortified town during the colonial era. This neighborhood is home to the 17th-century Baroque Church of St. Augustin and Fort Santiago, a multi-story military prison and citadel.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>