<?php
    $current_page = '';
    include('assets/header-admin.php');
?>

<section class="main-container-mAccount main-container main-container-update">
    <h2>Manage your account</h2>
    <section class="form-update">
        <h3>Modify your profile picture</h3>
        <?php while ($data = $connected_admin_query->fetch()) { ?>
        <form action="assets/manageAccount/controller/update-profile-picture.php" method="POST">
            <div class="display-pictures-update">
                <input type="hidden" name="path_pictures" value="../assets/pictures/admin/profile-pictures/">
                <img src="../assets/pictures/admin/profile-pictures/<?php echo $data['profile_picture']; ?>" alt="Your profile picture - <?php echo ucfirst($data['username']); ?>" class="profile-picture-admin">
                <div class="d-flex justify-content-center align-items-center">
                    <label class="btn-file-input-preview">
                        <i class="fa fa-image mr-2"></i><span class="span-no-choice"><?php echo $data['profile_picture']; ?></span><span class="span-file-chosen"></span><input type="file" style="display: none;" name="picture">
                    </label>
                    <button type="button" class="btn-delete-picture"><i class="far fa-times-circle"></i></button>
                </div>
            </div>
            <input type="submit" value="Apply modifications">
        </form>
        <?php } ?>
    </section>
    <section class="form-update">
        <h3>Modify your password</h3>
        <form action="assets/manageAccount/controller/update-password.php" method="POST">
            <div>
                <input type="password" name="new-password" placeholder="Enter new password">
            </div>
            <div>
                <input type="password" name="confirm-password" placeholder="Confirm the password">
            </div>
            <input type="submit" value="Apply modifications">
        </form>
    </section> 
</section>

<?php include('assets/footer-admin.php'); ?>