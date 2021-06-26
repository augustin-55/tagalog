<?php include('assets/header-admin.php'); ?>

<section class="main-container-admin-home main-container">
    <section class="main-section-admin">
        <article class="intro-admin-home">
            <img src="../assets/pictures/admin/home/lovingkisses.png" alt="Loving kisses">
            <div>
                <h4>We can update content of the website in this administration part !</h4>
                <p>Connected : <?php echo $connected_admin; ?></p>
            </div>
        </article>
        <div class="d-flex">
            <div class="flex-fill">
                <article class="category-admin-home">
                    <button class="button-admin-home">Homepage <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Soon...</p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">About us <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number : <span><?php while ($data = $countCountriesArticles->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Vocabulary <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number of words : <span><?php while ($data = $countVocabulary->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Portfolio <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number : <span><?php while ($data = $countPortfolio->fetch()) { echo $data[0]; } ?></span></p>
                        <p>Number in Philippines part : <span><?php while ($data = $countPortfolioPhilippines->fetch()) { echo $data[0]; } ?></span></p>
                        <p>Number in France part : <span><?php while ($data = $countPortfolioFrance->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Travels <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total of articles in this part : <span><?php while ($data = $countTravelsArticle->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
            </div>
        </div>
    </section> 
</section>

<?php include('assets/footer-admin.php'); ?>































