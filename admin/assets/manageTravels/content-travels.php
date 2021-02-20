<div class="main-title-admin">
    <h2>Manage Travels - Articles</h2>
</div>

<form action="#" method="GET">
<select name="select_category">
        <option value="default"> ----- </option>
        <?php while ($donnees = $categories_travel->fetch()) { ?>
            <option value="<?php echo $donnees['category']; ?>"><?php echo $donnees['category'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Submit">
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
            <?php while ($donnees = $travels->fetch()) { ?>
                <tr>
                    <td><?php echo $donnees['category']; ?></td>
                    <td><?php echo $donnees['picture']; ?></td>
                    <td><?php echo $donnees['pictures_id'] ?></td>
                    <td><?php echo $donnees['title']; ?></td>
                    <td class="text-justify"><?php echo $donnees['description']; ?></td>
                    <td><?php echo $donnees['display_carousel']; ?></td>
                    <td><a href="assets/manageTravels/controller/update.php?manageTravels=content&id=<?php echo $donnees['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/manageTravels/controller/delete.php?manageTravels=content&id=<?php echo $donnees['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
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
                    <?php while ($donnees = $categories_travel->fetch()) { ?>
                        <option value="<?php echo $donnees['id']; ?>"><?php echo $donnees['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="file" class="label-file-input">Choose preview picture</label>
                <input id="file" type="file" name="picture" style="display: none;">
            </div>
            <div>
                <label for="file" class="label-file-input">Choose picture 1</label>
                <input id="file" type="file" name="picture1" style="display: none;">
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