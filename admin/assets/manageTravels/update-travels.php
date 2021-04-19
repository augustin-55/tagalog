<?php if ($_GET['display'] == 'content') { ?>

    <div class="main-title-admin">
        <h2>Manage travels - Articles</h2>
    </div>

    <article class="form-update">
        <form action="assets/manageTravels/controller/add.php?manageTravels=content" method="POST">
            <div>
                <select name="category">
                    <option value="0">---</option>
                    <?php while ($select = $categories_travel_select->fetch()) { ?>
                        <option value="<?php echo $select['id']; ?>"><?php echo $select['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
                <?php while($data = $update_travels_content->fetch()) { ?>
                <div class="display-pictures-update">
                    <input type="hidden" name="path_pictures" value="../assets/pictures/travels/content/">
                    <img src="../assets/pictures/travels/content/<?php echo $data['picture']; ?>" alt="thumbnail of <?php echo $data['title']; ?> - travels article">
                    <div class="d-flex justify-content-center align-items-center">
                        <label class="btn-file-input-preview">
                            <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $data['picture']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                </div>
                <div class="other-pictures-update">
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 1</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_1">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 1</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_1">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 1</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_1">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 1</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_1">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                </div>
                <div>
                    <textarea name="description" placeholder="Description" cols="18" rows="8"></textarea>
                </div>
                <?php } ?>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <hr>
        <a href="manageTravels.php?manageTravels=content">Previous</a>
    </article>

<?php } else if ($_GET['display'] == 'category') { ?>

    <div class="main-title-admin">
        <h2>Manage travels - Categories</h2>
    </div>

    <article class="form-update">
        <?php while($data = $update_travels_category->fetch()) { ?>
        <form action="assets/manageTravels/controller/update.php?manageTravels=category&id=<?php echo $data['id']; ?>" method="POST">
            <div class="display-pictures-update">
                <input type="hidden" name="path_pictures" value="../assets/pictures/travels/categories/">
                <img src="../assets/pictures/travels/categories/<?php echo $data['thumbnail']; ?>" alt="thumbnail of <?php echo $data['category']; ?> - travels category">
                <div class="d-flex justify-content-center align-items-center">
                    <label class="btn-file-input-preview">
                        <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $data['thumbnail']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="thumbnail">
                    </label>
                    <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                </div>
            </div>
            <div>
                <input type="text" name="category-list" placeholder="Category" value="<?php echo $data['category']; ?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <?php } ?>
        <hr>
        <a href="manageTravels.php?manageTravels=category">Previous</a>
    </article>
    <?php } ?>