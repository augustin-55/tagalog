<?php $food = $bdd->query('SELECT * FROM cooking'); ?>

<div class="main-title-admin">
    <h2>Manage Vocabulary - Food</h2>
</div>

<section>
    <article class="table-mVocabulary">
        <table >
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>English</th>
                    <th>Tagalog</th>
                    <th>French</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php while ($donnees = $food->fetch()) { ?>
                        <td><img src="../assets/pictures/vocabulary/cooking/<?php echo $donnees['picture']; ?>" alt="picture <?php echo $donnees['english']; ?>"></td>
                        <td><?php echo $donnees['english']; ?></td>
                        <td><?php echo $donnees['tagalog']; ?></td>
                        <td><?php echo $donnees['french']; ?></td>
                        <td><a href="#"><i class="fas fa-edit"></i></a></td>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </article>
    <article class="form-mVocabulary">
        <h4>Add a word</h4>
        <form action="#" method="POST">
            <div>
                <input type="hidden" name="path_pictures" value="../assets/pictures/travels/content/">
                <img src="../assets/pictures/vocabulary/cooking/<?php echo $donnees['picture']; ?>" alt="thumbnail of <?php echo $donnees['title']; ?> - travels article">
                <div class="d-flex justify-content-center align-items-center">
                    <label class="btn-file-input-preview">
                        <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $donnees['picture']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                    </label>
                    <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                </div>
            </div>
            <div>
                <input type="text" name="english" placeholder="English word">
            </div>
            <div>
                <input type="text" name="tagalog" placeholder="Tagalog trad">
            </div>
            <div>
                <input type="text" name="french" placeholder="French trad">
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </article>
</section>