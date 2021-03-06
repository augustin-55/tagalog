<div class="main-title-admin">
    <h2>Manage Travels - Categories</h2>
</div>

<section>
    <article class="table-mTravels">
        <table >
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($donnees = $categories_travel_select->fetch()) { ?>
                    <tr>
                        <td><?php echo $donnees['category']; ?></td>
                        <td><a href="#"><i class="fas fa-edit"></i></a></td>
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
                <input type="text" name="thumbnail" placeholder="Picture.ext">
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