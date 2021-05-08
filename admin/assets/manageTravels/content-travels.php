<div class="main-title-admin">
    <h2>Manage Travels - Articles</h2>
</div>

<form action="#" method="GET">
<select name="select_category_travels">
        <option value="default"> ----- </option>
        <?php while ($data = $categories_travel_select->fetch()) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['category']; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Select">
</form>

<section>
    <article class="table-mTravels">
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Preview picture</th>
                    <th>Pictures</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Display in carousel</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($data = $travels->fetch()) { ?>
                <tr>
                    <td><?php echo $data['category']; ?></td>
                    <td><img src="../assets/pictures/travels/content/<?php echo $data['picture']; ?>"></td>
                    <td class="display-pictures-admin">
                        <img src="../assets/pictures/travels/content/<?php echo $data['picture_1']; ?>">
                        <img src="../assets/pictures/travels/content/<?php echo $data['picture_2']; ?>">
                        <img src="../assets/pictures/travels/content/<?php echo $data['picture_3']; ?>">
                        <img src="../assets/pictures/travels/content/<?php echo $data['picture_4']; ?>">
                    </td>
                    <td><?php echo $data['title']; ?></td>
                    <td class="text-justify"><?php echo substr($data['description'], 0, 200).'...'; ?></td>
                    <td><?php echo $data['display_carousel']; ?></td>
                    <td><a href="update-forms-admin.php?update=travels&display=content&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/manageTravels/controller/delete.php?manageTravels=content&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mTravels">
        <h4>Add a new article</h4>
        <form action="assets/manageTravels/controller/add.php?manageTravels=content" method="POST">
            <div>
                <select name="category">
                    <option value="0">---</option>
                    <?php while ($data = $categories_travel_add->fetch()) { ?>
                        <option value="<?php echo $data['id']; ?>"><?php echo $data['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <label class="btn-file-input-preview">
                    <i class="fa fa-image"></i><span class="span-no-choice">Choose preview picture</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                </label>
                <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
            </div>
            <div class="choose-pictures-input">
                <a href="javascript:void(0)" class="add-pictures-link">Add pictures</a>
                <div class="add-pictures-input" style="display: none;">
                    <hr>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 1</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_1">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 2</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_2">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 3</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_3">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                    </div>
                    <div>
                        <label class="btn-file-input">
                            <i class="fa fa-image"></i><span class="span-no-choice">Choose picture 4</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture_4">
                        </label>
                        <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
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
</section>