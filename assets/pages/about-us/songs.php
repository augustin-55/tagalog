<?php include('controller/display-songs.php'); ?>

<div class="main-content-songs">
    <h4 class="text-center">~ <i class="fas fa-music"></i> Our favorite songs ~</h4>

    <section>
        <div class="select-user-songs">
            <form action="#" method="POST">
                <select name="user">
                    <option value="default">Couple songs</option>
                    <option value="may">May</option>
                    <option value="augustin">Augustin</option>
                </select>
                <input type="submit" value="See our preferences">
            </form>
        </div>
        <article class="content-songs-top">
            <div class="carousel-songs">
                <div class="left-controller-carousel"></div>
                <div class="carousel-videos embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/<?php echo $donnees['link']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="right-controller-carousel"></div>
            </div>
        </article>
        <section class="content-songs-bottom">
            <?php while($donnees = $songs->fetch()) { ?>
            <div class="show-videos-bottom">
                <img src="https://img.youtube.com/vi/<?php echo $donnees['link']; ?>/default.jpg" alt="">
            </div>
            <?php } ?>
        </section>
    </section>
</div>