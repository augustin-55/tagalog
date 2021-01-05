<!-- Header -->
<?php
    $current_page = 'courtesy';
    include('assets/header.php');
    $sql = 'SELECT * FROM courtesy ORDER BY id ASC';
    $req = $bdd->query($sql); 
?>

<!-- Main body : Courtesy -->
<div class="main-container main-container-courtesy">

    <!-- Astronaut picture -->
    <img class="astronaut-background-picture" src="assets/pictures/vocabulary/courtesy/astronaut.png">

    <!-- Research section -->
    <section class="search-section">
        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </section>

    <!-- Words section : basic talk -->
    <section class="section-courtesy-basics">
        <h2>Courtesy vocabulary : Basic talk</h2>
        <?php while ($courtesy = $req->fetch()) { ?>
        <div class="flex-courtesy">
            <ul class="courtesy-article-words">
                <li class="tagalog-basics-courtesy"><?php echo $courtesy['tagalog']; ?></li>
                <li class="english-basics-courtesy"><?php echo $courtesy['english']; ?></li>
            </ul>
        </div>
        <?php } $req->closeCursor(); ?>
    </section>

    <!-- Words section : notes -->
    <section class="section-courtesy-notes">
        <h4>A few note now...</h4>
        <p>To show our respect towards a person, like an older person, we can use "po" after polite formulas.</p>
        <p>Ex : Kumusta <em>po</em> !</p>
    </section>

</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>