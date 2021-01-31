<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'aboutUs';
    include('assets/header.php');
?>

<section class="main-section-aboutUs">
    <section class="main-profile">
        <article>
            <div class="profile-pictures">
                <img class="picture-May" src="assets/pictures/about-us/May.jpg" alt="Profile picture - May">
                <img class="picture-Augustin picture-none" src="assets/pictures/about-us/Augustin.jpg" alt="Profile picture - Augustin">
            </div>
            <div class="select-profile-link"><img class="flower-picture" src="assets/pictures/about-us/flower.png" alt="flower"><img class="butterfly-picture picture-none" src="assets/pictures/about-us/butterfly.png" alt="butterfly"><a href="?profile=May" class="profile-May">May </a><span> & </span><a href="?profile=Augustin" class="profile-Augustin">Augustin</a></div>
            <div class="profile-presentation">
                <p class="description-May">I'm a ravishing woman coming from Philippines. My life is being full of beautiful accomplishments, how can I be this beautiful ? this is the biggest question of my life. I'm just wonderful and so lovable. (I belong to Augustin).</p>
                <p class="description-Augustin text-none">Coming from France, passionnated by IT and farming. I live my passion fully at the best, especially making websites. Member of IT support for 2 years in Daimler buses company.</p>
            </div>
            <div class="profile-socials">
                <ul class="socials-May">
                    <li><a href="https://www.facebook.com/may.delossantos.121" target="_blank"><i class="fab fa-facebook-f"></a></i></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <ul class="socials-Augustin socials-none">
                    <li><a href="https://www.facebook.com/augustin.guillemin.5/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </article>
    </section>
    <section class="aside-profile">
        <div class="menu-aboutUs">
            <ul>
                <li><a href="?page=meeting">Our meeting</a></li>
                <li><a href="?page=countries">Our countries</a></li>
                <li><a href="?page=songs">Favorite songs</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>
                <li><a href="#">Item 6</a></li>
            </ul>
        </div>
        <section class="content-aboutUs">
            
                <?php if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'countries') {
                        include_once('assets/pages/about-us/countries.php');
                    }
                    if ($_GET['page'] == 'meeting') {
                        include_once('assets/pages/about-us/meeting.php');
                    }
                    else if ($_GET['page'] == 'songs') {
                        include_once('assets/pages/about-us/songs.php');
                    }
                }
                else {
                    include_once('assets/pages/about-us/meeting.php');
                }
                
                ?>
            <article>

            </article>
        </section>
    </section>
</section>

<!-- Footer -->
<?php include('assets/footer.php'); ?>