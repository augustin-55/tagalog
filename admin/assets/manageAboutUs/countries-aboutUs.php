<?php
    if (isset($_GET['country'])) {
        $countrySmSelect = 'ok';
        var_dump($_GET);
    }
    else {
        $countrySmSelect = 'non ok';
        var_dump($_GET);
    }
?>

<div class="main-title-admin">
    <h2>Manage About us - Countries</h2>
</div>

<form action="?country=" method="GET">
    <select name="select_country">
        <option value="default"> ----- </option>
        <?php while ($data = $countries->fetch()) { ?>
            <option value="<?php echo $data['country']; ?>"><?php echo $data['country'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Submit">
</form>

<section>
    <article class="table-mAboutUs">
        <table >
            <thead>
                <tr>
                    <th>Country</th>
                    <th>picture</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $smAll->fetch()) { ?>
                    <tr>
                        <td><?php echo ucfirst($data['country']); ?></td>
                        <td><img src="../assets/pictures/about-us/countries/<?php echo $data['picture']; ?>"></td>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo substr($data['description'], 0, 100).'...'; ?></td>
                        <td><a href="#"><i class="fas fa-edit"></i></a></td>
                        <td><a href="assets/managePortfolio/controller/delete.php?managePortfolio=category&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mAboutUs">
        <h4>Add an article - See more of our country</h4>
        <form action="assets/managePortfolio/controller/add.php?managePortfolio=category" method="POST">
            <div>
                <select name="country">
                    <option value="1">Philippines</option>
                    <option value="2">France</option>
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