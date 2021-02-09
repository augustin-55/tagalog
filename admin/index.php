<?php include('assets/header-admin.php'); ?>

<section class="main-container-admin-home main-container">
    <section class="main-section-admin">
        <article class="intro-admin-home">
            <img src="../assets/pictures/admin/home/lovingkisses.png" alt="Loving kisses">
            <h4>We can update content of the website in this administration part my May <i class="fas fa-heartbeat"></i></h4>
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
                        <p>Total number : <span><?php while ($donnees = $countCountriesArticles->fetch()) { echo $donnees[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Vocabulary <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number of words : <span><?php while ($donnees = $countVocabulary->fetch()) { echo $donnees[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Portfolio <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total number : <span><?php while ($donnees = $countPortfolio->fetch()) { echo $donnees[0]; } ?></span></p>
                        <p>Number in Philippines part : <span><?php while ($donnees = $countPortfolioPhilippines->fetch()) { echo $donnees[0]; } ?></span></p>
                        <p>Number in France part : <span><?php while ($donnees = $countPortfolioFrance->fetch()) { echo $donnees[0]; } ?></span></p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Trips <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <div class="underline-admin-home"></div>
                        <p>Total of places we plan to discover : <span><?php while ($donnees = $countDreamplace->fetch()) { echo $donnees[0]; } ?></span></p>
                        <p>Total of places we knew together : <span><?php while ($donnees = $countFeedback->fetch()) { echo $donnees[0]; } ?></span></p>
                    </div>
                </article>
            </div>
            <div class="flex-fill">
                <article class="category-admin-home">
                    <button class="button-admin-home">Trafic - Visitors on the website <i class="fas fa-chevron-down"></i></button>
                    <div>
                        <p>Soon...</p>
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - About us <i class="fas fa-chevron-down"></i></button>
                    <div>
                        
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Vocabulary <i class="fas fa-chevron-down"></i></button>
                    <div>
                        
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Portfolio <i class="fas fa-chevron-down"></i></button>
                    <div>
                        
                    </div>
                </article>
                <article class="category-admin-home">
                    <button class="button-admin-home">Counter - Trips <i class="fas fa-chevron-down"></i></button>
                    <div>
                        
                    </div>
                </article>
            </div>
        </div>
    </section> 
</section>

<?php include('assets/footer-admin.php'); ?>































