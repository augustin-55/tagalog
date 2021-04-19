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
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $courtesy->fetch()) { ?>
                <tr>
                    <td><?php echo $data['english']; ?></td>
                    <td><?php echo $data['tagalog']; ?></td>
                    <td><?php echo $data['french']; ?></td>
                    <td><a href="update-forms-admin.php?update=vocabulary&display=courtesy&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/manageVocabulary/controller/delete.php?manageVocabulary=courtesy&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mVocabulary">
        <h4>Add a word</h4>
        <form action="assets/manageVocabulary/controller/add.php?manageVocabulary=courtesy" method="POST">
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