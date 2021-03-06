<?php if ($_GET['display'] == 'content') { ?>

    <div class="main-title-admin">
        <h2>Manage Travels - Articles</h2>
    </div>

    <article class="form-update">
        <h4>update article</h4>
        <form action="assets/manageTravels/controller/add.php?manageTravels=content" method="POST">
            <div>
                <select name="category">
                    <option value="0">---</option>
                    <?php while ($donnees = $categories_travel_add->fetch()) { ?>
                        <option value="<?php echo $donnees['id']; ?>"><?php echo $donnees['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="file" class="label-file-input-preview">Choose preview picture</label>
                <input id="file" type="file" name="picture" style="display: none;">
            </div>
            <div class="choose-pictures-input">
                <a href="javascript:void(0)" class="add-pictures-link">Add pictures</a>
                <div class="add-pictures-input" style="display: none;">
                    <hr>
                    <div>
                        <label for="file" class="label-file-input">Choose picture 1</label>
                        <input id="file" type="file" name="picture_1" style="display: none;">
                    </div>
                    <div>
                        <label for="file" class="label-file-input">Choose picture 2</label>
                        <input id="file" type="file" name="picture_2">
                    </div>
                    <div>
                        <label for="file" class="label-file-input">Choose picture 3</label>
                        <input id="file" type="file" name="picture_3">
                    </div>
                    <div>
                        <label for="file" class="label-file-input">Choose picture 4</label>
                        <input id="file" type="file" name="picture_4">
                    </div>
                    <hr>
                </div>
            </div>
            <div>
                <input type="text" name="title" placeholder="Title">
            </div>
            <div>
                <textarea name="description" placeholder="Description" cols="18" rows="8"></textarea>
            </div>
            <div>
                <label for="display-carousel">Display in carousel :</label>
                <input type="checkbox" name="display-carousel" placeholder="Choose if display in carousel">
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </article>

<?php } else if ($_GET['display'] == 'category') { ?>

<form action="#" method="POST">

</form>

<?php } ?>