<div class="main-title-admin">
    <h2>Manage Portfolio - Categories</h2>
</div>

<section>
    <article class="table-mPortfolio">
        <table >
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $categories_portfolio->fetch()) { ?>
                    <tr>
                        <td><?php echo $data['category']; ?></td>
                        <td><a href="update-forms-admin.php?update=portfolio&display=category&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="assets/managePortfolio/controller/delete.php?managePortfolio=category&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mPortfolio">
        <h4>Add a category</h4>
        <form action="assets/managePortfolio/controller/add.php?managePortfolio=category" method="POST">
            <div>
                <input type="text" name="category-list" placeholder="Category">
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </article>
</section>