<?php $animals = $bdd->query('SELECT * FROM animals'); ?>

<div class="main-title-admin">
    <h2>Manage Vocabulary - Animals</h2>
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
                    <?php while ($donnees = $animals->fetch()) { ?>
                        <td><img src="../assets/pictures/vocabulary/animals/<?php echo $donnees['picture']; ?>" alt="picture <?php echo $donnees['english']; ?>"></td>
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
                <input type="file" name="upload-picture" class="upload-picture">
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