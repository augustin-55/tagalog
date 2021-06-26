<?php if ($_GET['display'] == 'content') { ?>
    <div class="main-title-admin">
        <h2>Manage portfolio - Content</h2>
    </div>
    <article class="form-update">
        <?php while($data = $update_portfolio_content->fetch()) { ?>
        <form action="assets/managePortfolio/controller/update.php?managePortfolio=content&id=<?php echo $data['id']; ?>" method="POST">
            <div>
                <select name="category">
                    <option value="0">---</option>
                    <?php while ($select = $categories_portfolio_select->fetch()) { ?>
                        <option value="<?php echo $select['id']; ?>" <?php if($select['id'] == $data['category_id']) {echo 'selected="selected"';} ?>><?php echo $select['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="display-pictures-update">
                <input type="hidden" name="path_pictures" value="../assets/pictures/portfolio/">
                <img src="../assets/pictures/portfolio/<?php echo $data['picture']; ?>" alt="thumbnail of <?php echo $data['title']; ?> - portfolio article">
                <div class="d-flex justify-content-center align-items-center">
                    <label class="btn-file-input-preview">
                        <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $data['picture']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                    </label>
                    <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                </div>
            </div>
            <div>
                <input type="text" name="title" placeholder="Title" value="<?php echo $data['title']; ?>">
            </div>
            <div>
                <textarea name="description" placeholder="Description" cols="18" rows="8"><?php echo $data['description']; ?></textarea>
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <?php } ?>
        <hr>
        <a href="managePortfolio.php?managePortfolio=content">Previous</a>
    </article>
<?php } else if ($_GET['display'] == 'category') { ?>
    <div class="main-title-admin">
        <h2>Manage portfolio - Categories</h2>
    </div>
    <article class="form-update">
        <?php while($data = $update_portfolio_category->fetch()) { ?>
        <form action="assets/managePortfolio/controller/update.php?managePortfolio=category&id=<?php echo $data['id']; ?>" method="POST">
            <div>
                <input type="text" name="category" placeholder="Category" value="<?php echo $data['category']; ?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <?php } ?>
        <hr>
        <a href="managePortfolio.php?managePortfolio=category">Previous</a>
    </article>
<?php } ?>