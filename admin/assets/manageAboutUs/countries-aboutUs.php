<div class="main-title-admin">
    <h2>Manage About us - Countries</h2>
</div>

<form action="" method="GET">
    <select name="country">
        <option value="default"> ----- </option>
        <?php while ($donnees = $countries->fetch()) { ?>
            <option value="<?php echo $donnees['country']; ?>"><?php echo $donnees['country'] ?></option>
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
                <?php while ($donnees = $smAll->fetch()) { ?>
                    <tr>
                        <td><?php echo $donnees['country']; ?></td>
                        <td><?php echo $donnees['picture']; ?></td>
                        <td><?php echo $donnees['title']; ?></td>
                        <td><?php echo $donnees['description']; ?></td>
                        <td><a href="#"><i class="fas fa-edit"></i></a></td>
                        <td><a href="assets/managePortfolio/controller/delete.php?managePortfolio=category&id=<?php echo $donnees['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mAboutUs">
        <h4>Add an article - See more of our country</h4>
        <mark>I hope our babies are gonna discover lots of things about our countries as much as for our love</mark>
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