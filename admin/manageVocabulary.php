<?php include('assets/header-admin.php'); ?>

<section class="main-container-mVocabulary main-container">
    <div class="menu-mVocabulary">
        <ul>
            <li><a href="?manageVocabulary=courtesy">Courtesy</a></li>
            <li><a href="?manageVocabulary=food">Food</a></li>
            <li><a href="?manageVocabulary=animals">Animals</a></li>
        </ul>
    </div>
    <div class="content-mVocabulary">
        <?php
            if (isset($_GET['manageVocabulary'])) {
                if ($_GET['manageVocabulary'] == 'animals') {
                    include_once('assets/manageVocabulary/animals.php');
                }
                else if ($_GET['manageVocabulary'] == 'courtesy') {
                    include_once('assets/manageVocabulary/courtesy.php');
                }
                else if ($_GET['manageVocabulary'] == 'food') {
                    include_once('assets/manageVocabulary/food.php');
                }
            }
            else {
                include_once('assets/manageVocabulary/courtesy.php');
            }
        ?>
    </div>
</section>

<?php include('assets/footer-admin.php'); ?>