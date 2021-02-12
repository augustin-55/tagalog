<div class="main-title-admin">
    <h2>Manage Travels - Articles</h2>
</div>

<section>
    <article class="table-mTravels">
        <table >
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($donnees = $travels->fetch()) { ?>
                <tr>
                    <td><?php echo $donnees['category']; ?></td>
                    <td><?php echo $donnees['picture']; ?></td>
                    <td><?php echo $donnees['name']; ?></td>
                    <td class="text-justify"><?php echo $donnees['description']; ?></td>
                    <td><a href="#"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/manageTravels/controller/delete.php?manageTravels=pictures&id=<?php echo $donnees['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
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
                <input type="text" name="picture" placeholder="Picture.ext">
            </div>
            <div>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div>
                <textarea name="description" placeholder="Description" cols="18" rows="8"></textarea>
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </article>
</section>