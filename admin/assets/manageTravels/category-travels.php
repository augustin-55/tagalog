<div class="main-title-admin">
    <h2>Manage Travels - Categories</h2>
</div>

<section>
    <article class="table-mTravels">
        <table >
            <thead>
                <tr>
                    <th>Preview picture</th>
                    <th>Category</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($donnees = $categories_travel_select->fetch()) { ?>
                    <tr>
                        <td><img src="../assets/pictures/travels/categories/<?php echo $donnees['thumbnail']; ?>"></td>
                        <td><?php echo $donnees['category']; ?></td>
                        <td><a href="update-form-admin.php?update=travels&display=category&id=<?php echo $donnees['id']; ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="assets/manageTravels/controller/delete.php?manageTravels=category&id=<?php echo $donnees['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mTravels">
        <h4>Add a category</h4>
        <form action="assets/manageTravels/controller/add.php?manageTravels=category" method="POST">
            <div>
                <label class="btn-file-input-preview">
                    <i class="fa fa-image"></i><span class="span-no-choice">Choose category picture</span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="thumbnail">
                </label>
                <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
            </div>
            <div>
                <input type="text" name="category-list" placeholder="Category">
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </article>
</section>