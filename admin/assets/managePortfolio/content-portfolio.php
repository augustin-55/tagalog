<div class="main-title-admin">
    <h2>Manage Portfolio - Pictures</h2>
</div>

<section>
    <article class="table-mPortfolio">
        <table >
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($donnees = $portfolio->fetch()) { ?>
                <tr>
                    <td><?php echo $donnees['category']; ?></td>
                    <td><?php echo $donnees['picture']; ?></td>
                    <td><?php echo $donnees['title']; ?></td>
                    <td class="text-justify"><?php echo $donnees['description']; ?></td>
                    <td><a href="#"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/managePortfolio/controller/delete.php?managePortfolio=pictures&id=<?php echo $donnees['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mPortfolio">
        <h4>Add a new picture</h4>
        <form action="assets/managePortfolio/controller/add.php?managePortfolio=pictures" method="POST">
            <div>
                <select name="category">
                    <option value="0">---</option>
                    <?php while ($donnees = $category->fetch()) { ?>
                        <option value="<?php echo $donnees['id']; ?>"><?php echo $donnees['category']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input type="text" name="picture" placeholder="Picture.ext">
            </div>
            <div>
                <input type="text" name="title" placeholder="Title">
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