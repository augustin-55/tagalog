<?php
    $current_page = '';
    include('assets/header-admin.php');
?>

<section class="main-container-mAccount main-container">
    <h2>Manage your account</h2>
    <section>
        <h3>Modify your profile picture</h3>
        <form action="#" method="POST">
            
            <input type="submit" value="Apply modifications">
        </form>
    </section>  
    <section>
        <h3>Modify your password</h3>
        <form action="assets/manageAccount/controller/update-password.php" method="POST">
            <div>
                <label for="new-password">Enter your new password</label>
                <input type="password" name="new-password">
            </div>
            <div>
                <label for="confirm-password">Confirm the password</label>
                <input type="password" name="confirm-password">
            </div>
            <input type="submit" value="Apply modifications">
        </form>
    </section> 
</section>

<?php include('assets/footer-admin.php'); ?>