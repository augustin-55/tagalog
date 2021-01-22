<?php
    $current_page = 'portfolio';
    include('assets/header.php');
?>

<!-- Main body : Portfolio -->
<section class="title-portfolio">
    <p>In this part, story of our life together through pictures... Always looking forward to spend time together...</p>
    <div class="underline-title-portfolio"><i class="fas fa-heart"></i></div>
</section>
<section class="main-content-portfolio">
    <div class="main-menu-portfolio">
    <ul>
        <?php while ($donnees = $category->fetch()) { ?>
            <li><a href="?category=<?php echo $donnees['category']; ?>"><?php echo $donnees['category']; ?></a></li>
        <?php } // $donnees->closeCursor(); ?>
    </ul>
    </div>
    <div class="main-container-portfolio">
        <?php while ($donnees = $portfolio->fetch()) { ?>
        <section class="section-portfolio">
            <article>
                <img class="picture-portfolio" src="assets/pictures/portfolio/<?php echo $donnees['picture']; ?>" alt="<?php echo $donnees['title']; ?>">
            </article>
            <article class="aside-portfolio">
                <div class="division-bar-portfolio"></div>
                <p class="title-portfolio"><?php echo $donnees['title']; ?></p>
                <p class="description-portfolio"><?php echo $donnees['description']; ?></p>
            </article>
        </section>
        <?php } // $donnees->closeCursor(); ?>
    </div>
</section>

<!-- Footer -->
<?php include('assets/footer.php'); ?>