<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'cooking';
    include('assets/header.php');
    $sql = 'SELECT * FROM cooking';
    $req = $bdd->query($sql); 
?>

<!-- Main body : Cooking -->
<div class="main-container main-container-cooking">

    <!-- Research section -->
    <section class="search-section">
        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </section>
        <!-- Background-picture -->
        <img src="assets/pictures/vocabulary/cooking/background.png" alt="background chef" class="background-picture">
        <!-- Words section -->
        <section class="words-section-cooking">
                <h2>Food vocabulary</h2>
                <article class="cooking-article-words">
                    <table>
                        <tr>
                            <th>Picture</th>
                            <th>English</th>
                            <th>Tagalog</th>
                            <th>French</th>
                        </tr>
                        <?php while ($cooking = $req->fetch()) { ?>
                            <tr>
                                <td><img src="assets/pictures/vocabulary/cooking/<?php echo $cooking['picture']; ?>" class="picture-cooking" alt=""></td>
                                <td class="english-trad"><p><?php echo $cooking['english']; ?></p></td>
                                <td class="tagalog-trad"><p><?php echo $cooking['tagalog']; ?></p></td>
                                <td class="french-trad"><p><?php echo $cooking['french']; ?></p></td>
                            </tr>
                        <?php }; $req->closeCursor(); ?>
                    </table>
                </article>
        </section>

</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>