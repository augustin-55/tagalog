<?php include('assets/header-admin.php'); ?>

<section class="main-container-admin-home main-container">
    <section class="main-section-admin">
        <article class="intro-admin-home">
            <img src="../assets/pictures/admin/home/lovingkisses.png" alt="Loving kisses">
            <div>
                <h4>We can update content of the website in this administration part my May <i class="fas fa-heartbeat"></i></h4>
                <p>Connected : <?php echo $connected_admin; ?></p>
            </div>
        </article>
        <div class="d-flex">
            <div class="flex-fill">
                <article class="category-admin-home">
                    <button class="button-admin-home">Trafic - Visitors on the website <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Soon...</p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - About us <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number : <span><?php while ($data = $countCountriesArticles->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Vocabulary <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number of words : <span><?php while ($data = $countVocabulary->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Portfolio <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number : <span><?php while ($data = $countPortfolio->fetch()) { echo $data[0]; } ?></span></p>
                        <p>Number in Philippines part : <span><?php while ($data = $countPortfolioPhilippines->fetch()) { echo $data[0]; } ?></span></p>
                        <p>Number in France part : <span><?php while ($data = $countPortfolioFrance->fetch()) { echo $data[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Trips <i class="fas fa-chevron-down"></i></button>
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































