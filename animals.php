<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'animals';
    include('assets/header.php');
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
                        <th>French</th>
                    </tr>
                    <?php while ($donnees = $animals->fetch()) { ?>
                        <tr>
                            <td><img src="assets/pictures/vocabulary/animals/<?php echo $donnees['picture']; ?>" class="picture-animals" alt=""></td>
                            <td class="english-trad"><p><?php echo $donnees['english']; ?></p></td>
                            <td class="tagalog-trad"><p><?php echo $donnees['tagalog']; ?></p></td>
                            <td class="french-trad"><p><?php echo $donnees['french']; ?></p></td>
                        </tr>
                    <?php } ?>
                </table>
            </article>
        </section>

</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>