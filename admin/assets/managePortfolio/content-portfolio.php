<div class="main-title-admin">
    <h2>Manage Portfolio - Pictures and stories</h2>
</div>

<section>
    <article class="table-mPortfolio">
        <table >
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($donnees = $portfolio->fetch()) { ?>
                <tr>
                    <td><?php echo $donnees['picture']; ?></td>
                    <td><?php echo $donnees['title']; ?></td>
                    <td class="text-justify"><?php echo $donnees['description']; ?></td>
                    <td><a href="#"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
    <article class="form-mPortfolio">
        <h4>Add a new picture</h4>
        <form action="assets/managePortfolio/controller/add.php" method="POST">
            <div>
                <input type="text" name="picture" placeholder="Picture.ext">
            </div>
            <div>
                <input type="text" name="title" placeholder="Title">
            </div>
            <div>
                <textarea name="description" placeholder="Description" cols="23" rows="9"></textarea>
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </article>
</section>