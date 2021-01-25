<!-- Header -->
<?php
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
                <p class="description-May">Integer venenatis risus vel sapien porta efficitur. Aliquam congue, lorem et ultrices tempor, purus nibh convallis velit, eget bibendum ipsum nunc in enim. Sed luctus nibh accumsan, tristique risus sit amet, pharetra justo. Morbi nec suscipit velit, vel eleifend arcu. Aenean accumsan lacinia mi, a vestibulum nisl. Nam tristique, nisi quis fermentum tempus, ipsum orci ultrices lorem, pulvinar pulvinar mi massa quis ex. In quis pretium nisl, vel efficitur sapien.</p>
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
                <li><a href="#">Our countries</a></li>
                <li><a href="#">Jean Pierre</a></li>
                <li><a href="#">Favorite songs</a></li>
            </ul>
        </div>
        <section class="content-aboutUs">
            <h4 class="text-center">~ About our countries ~</h4>
            <article>

            </article>
        </section>
    </section>
</section>

<!-- Footer -->
<?php include('assets/footer.php'); ?>