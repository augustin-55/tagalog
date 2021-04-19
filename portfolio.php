<?php
    require('assets/functions/functions.php');
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
        <li><a href="#">View all</a></li>
        <?php while ($data = $categories_portfolio->fetch()) { ?>
            <li><a href="?category=<?php echo $data['category']; ?>"><?php echo $data['category']; ?></a></li>
        <?php } ?>
    </ul>
    </div>
    <div class="main-container-portfolio">
        <?php while ($data = $portfolio->fetch()) { ?>
        <section class="section-portfolio">
            <article>
                <img class="picture-portfolio" src="assets/pictures/portfolio/<?php echo $data['picture']; ?>" alt="<?php echo $data['title']; ?>">
            </article>
            <article class="aside-portfolio">
                <div class="division-bar-portfolio"></div>
                <p class="title-portfolio"><?php echo $data['title']; ?></p>
                <p class="description-portfolio"><?php echo $data['description']; ?></p>
            </article>
        </section>
        <?php } ?>
    </div>
</section>

<!-- Footer -->
<?php include('assets/footer.php'); ?>