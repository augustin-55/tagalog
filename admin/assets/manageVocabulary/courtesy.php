<?php $courtesy = $bdd->query('SELECT * FROM courtesy'); ?>

<div class="main-title-admin">
    <h2>Manage Vocabulary - Courtesy</h2>
</div>

<section>
    <article class="table-mVocabulary">
        <table >
            <thead>
                <tr>
                    <th>English</th>
                    <th>Tagalog</th>
                    <th>French</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php while ($donnees = $courtesy->fetch()) { ?>
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