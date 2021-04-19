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
                <?php while ($data = $animals->fetch()) { ?>
                <tr>
                    <td><img src="../assets/pictures/vocabulary/animals/<?php echo $data['picture']; ?>" alt="picture <?php echo $data['english']; ?>"></td>
                    <td><?php echo $data['english']; ?></td>
                    <td><?php echo $data['tagalog']; ?></td>
                    <td><?php echo $data['french']; ?></td>
                    <td><a href="update-forms-admin.php?update=vocabulary&display=animals&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/manageVocabulary/controller/delete.php?manageVocabulary=animals&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mVocabulary">
        <h4>Add a word</h4>
        <form action="assets/manageVocabulary/controller/add.php?manageVocabulary=animals" method="POST">
            <div>
                <label class="btn-file-input-preview">
                    <i class="fa fa-image"></i><span class="span-no-choice">Choose picture</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                </label>
                <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
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