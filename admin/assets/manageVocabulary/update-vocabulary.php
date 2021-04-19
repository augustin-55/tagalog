<?php if ($_GET['display'] == 'courtesy') { ?>

    <div class="main-title-admin">
        <h2>Manage about us - Courtesy</h2>
    </div>

    <article class="form-update">
        <?php while($data = $update_vocabulary_courtesy->fetch()) { ?>
        <form action="assets/manageVocabulary/controller/update.php?manageVocabulary=courtesy&id=<?php echo $data['id']; ?>" method="POST">
            <div>
                <input type="text" name="english" placeholder="English" value="<?php echo $data['english']; ?>">
            </div>
            <div>
                <input type="text" name="tagalog" placeholder="Tagalog" value="<?php echo $data['tagalog']; ?>">
            </div>
            <div>
                <input type="text" name="french" placeholder="French" value="<?php echo $data['french']; ?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <?php } ?>
        <hr>
        <a href="manageVocabulary.php?manageVocabulary=courtesy">Previous</a>
    </article>

<?php } else if ($_GET['display'] == 'food') { ?>

    <div class="main-title-admin">
        <h2>Manage about us - Food</h2>
    </div>

    <article class="form-update">
        <?php while($data = $update_vocabulary_food->fetch()) { ?>
        <form action="assets/manageVocabulary/controller/update.php?manageVocabulary=food&id=<?php echo $data['id']; ?>" method="POST">
            <div class="display-pictures-update">
                <input type="hidden" name="path_pictures" value="../assets/pictures/vocabulary/cooking/">
                <img src="../assets/pictures/vocabulary/cooking/<?php echo $data['picture']; ?>" alt="thumbnail of <?php echo $data['english']; ?> - vocabulary article">
                <div class="d-flex justify-content-center align-items-center">
                    <label class="btn-file-input-preview">
                        <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $data['picture']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                    </label>
                    <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                </div>
            </div>
            <div>
                <input type="text" name="english" placeholder="English" value="<?php echo $data['english']; ?>">
            </div>
            <div>
                <input type="text" name="tagalog" placeholder="Tagalog" value="<?php echo $data['tagalog']; ?>">
            </div>
            <div>
                <input type="text" name="french" placeholder="French" value="<?php echo $data['french']; ?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <?php } ?>
        <hr>
        <a href="manageVocabulary.php?manageVocabulary=food">Previous</a>
    </article>

<?php } else if ($_GET['display'] == 'animals') { ?>

    <div class="main-title-admin">
        <h2>Manage about us - Animals</h2>
    </div>

    <article class="form-update">
        <?php while($data = $update_vocabulary_animals->fetch()) { ?>
        <form action="assets/manageVocabulary/controller/update.php?manageVocabulary=animals&id=<?php echo $data['id']; ?>" method="POST">
            <div class="display-pictures-update">
                <input type="hidden" name="path_pictures" value="../assets/pictures/vocabulary/animals/">
                <img src="../assets/pictures/vocabulary/animals/<?php echo $data['picture']; ?>" alt="thumbnail of <?php echo $data['english']; ?> - vocabulary article">
                <div class="d-flex justify-content-center align-items-center">
                    <label class="btn-file-input-preview">
                        <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $data['picture']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                    </label>
                    <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                </div>
            </div>
            <div>
                <input type="text" name="english" placeholder="English" value="<?php echo $data['english']; ?>">
            </div>
            <div>
                <input type="text" name="tagalog" placeholder="Tagalog" value="<?php echo $data['tagalog']; ?>">
            </div>
            <div>
                <input type="text" name="french" placeholder="French" value="<?php echo $data['french']; ?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <?php } ?>
        <hr>
        <a href="manageVocabulary.php?manageVocabulary=animals">Previous</a>
    </article>

<?php } ?>