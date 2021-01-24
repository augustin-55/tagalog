<!-- Header -->
<?php
    $current_page = 'aboutUs';
    include('assets/header.php');
?>

<section class="main-section-aboutUs">
    <section class="main-profile">
        <article>
            <div class="profile-pictures">
                <img src="assets/pictures/about-us/May.jpg" alt="Profile picture - May">
                <img src="assets/pictures/about-us/Augustin.jpg" alt="Profile picture - Augustin">
            </div>
            <div><a href="?profile=May">May</a>&<a href="?profile=Augustin">Augustin</a></div>
            <div>
                <p>small description - May</p>
                <p>small description - Augustin</p>
            </div>
        </article>
    </section>
    <section class="aside-profile">
        <div class="menu-about-us">
            <ul>
                <li><a href="#">Our countries</a></li>
                <li><a href="#">Favorite songs</a></li>
            </ul>
        </div>
        <article>

        </article>
    </section>
</section>

<!-- Footer -->
<?php include('assets/footer.php'); ?>