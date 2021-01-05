<!-- Header -->
<?php
    $current_page = 'animals';
    include('assets/header.php');
    $sql = 'SELECT * FROM animals';
    $req = $bdd->query($sql); 
?>

<!-- Main body : Cooking -->
<div class="main-container main-container-animals">

    <!-- Research section -->
    <section class="search-section">
        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </section>
        <!-- Words section -->
        <section class="words-section-animals">
            <h2>Animals vocabulary</h2>
            <article class="animals-article-words">
                <table>
                    <tr>
                        <th>Picture</th>
                        <th>English</th>
                        <th>Tagalog</th>
                    </tr>
                    <?php while ($animals = $req->fetch()) { ?>
                        <tr>
                            <td><img src="assets/pictures/vocabulary/animals/<?php echo $animals['picture']; ?>" class="picture-animals" alt=""></td>
                            <td class="english-trad"><p><?php echo $animals['english']; ?></p></td>
                            <td class="tagalog-trad"><p><?php echo $animals['tagalog']; ?></p></td>
                        </tr>
                    <?php }; $req->closeCursor(); ?>
                </table>
            </article>
        </section>

</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>