<!-- Header -->
<?php
    require('assets/functions/functions.php');
    $current_page = 'cooking';
    include('assets/header.php');
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
                        <?php while ($data = $cooking->fetch()) { ?>
                            <tr>
                                <td><img src="assets/pictures/vocabulary/cooking/<?php echo $data['picture']; ?>" class="picture-cooking" alt=""></td>
                                <td class="english-trad"><p><?php echo $data['english']; ?></p></td>
                                <td class="tagalog-trad"><p><?php echo $data['tagalog']; ?></p></td>
                                <td class="french-trad"><p><?php echo $data['french']; ?></p></td>
                            </tr>
                        <?php }; ?>
                    </table>
                </article>
        </section>

</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>