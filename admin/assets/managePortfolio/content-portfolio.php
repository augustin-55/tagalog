<div class="main-title-admin">
    <h2>Manage Portfolio - Pictures</h2>
</div>

<form action="#" method="GET">
<select name="select_category_portfolio">
        <option value="default"> ----- </option>
        <?php while ($data = $categories_portfolio_select->fetch()) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['category']; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Select">
</form>

<section>
    <article class="table-mPortfolio">
        <table>
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
            <?php while ($data = $portfolio->fetch()) { ?>
                <tr>
                    <td><?php echo $data['category']; ?></td>
                    <td><img src="../assets/pictures/portfolio/<?php echo $data['picture']; ?>"></td>
                    <td><?php echo $data['title']; ?></td>
                    <td class="text-justify"><?php echo substr($data['description'], 0, 100).'...'; ?></td>
                    <td><a href="update-forms-admin.php?update=portfolio&display=content&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="assets/managePortfolio/controller/delete.php?managePortfolio=pictures&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
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
                    <?php while ($data = $categories_portfolio_select->fetch()) { ?>
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