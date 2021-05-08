<?php if ($_GET['display'] == 'content') { ?>

    <div class="main-title-admin">
        <h2>Manage portfolio - Content</h2>
    </div>

    <article class="form-update">
        <h4>Update article</h4>
        <form action="assets/manageTravels/controller/add.php?manageTravels=content" method="POST">
            <div>
                <select name="category">
                    <option value="0">---</option>
                    <?php while ($select = $categories_travel_select->fetch()) { ?>
                        <option value="<?php echo $select['id']; ?>"><?php echo $select['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
                <?php while($data = $update_portfolio_content->fetch()) { ?>
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
                    <textarea name="description" placeholder="Description" cols="18" rows="8"></textarea>
                </div>
                <?php } ?>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <hr>
        <a href="managePortfolio.php?managePortfolio=content">Previous</a>
    </article>

<?php } else if ($_GET['display'] == 'category') { ?>

    <div class="main-title-admin">
        <h2>Manage portfolio - Categories</h2>
    </div>

    <article class="form-update">
        <form action="assets/manageTravels/controller/add.php?manageTravels=content" method="POST">
            
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
        <hr>
        <a href="managePortfolio.php?managePortfolio=categories">Previous</a>
    </article>

<?php } ?>