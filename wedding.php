<?php
    require('assets/functions/functions.php');
    $current_page = 'index';
    include('assets/header.php');
?>

<div class="main-container-home">
    <section class="section-1-bis-home">
        <div class="background-section-1-bis">
            <!-- <div class="blur"></div> -->
        </div>
        <div class="div-bis-home-1">
            <h2>We are getting married</h2>
            <img src="assets/pictures/home/section-1-bis/wedding-ring.svg" alt="Wedding ring SVG">
        </div>
        <div class="div-bis-home-2">
            <p>May <span>&</span> Augustin</p>
        </div>
        <div class="div-bis-home-3">
            <p>Countdown To Wedding Day</p>
            <div class="d-flex justify-content-center align-items-center">
                <div class="number-bis-home-3">
                    <div>
                        <span>0</span>
                        <span>4</span>
                        <span>8</span>
                    </div>
                    <span>Months</span>
                </div>
                <p>:</p>
                <div class="number-bis-home-3">
                    <div>
                        <span>0</span>
                        <span>2</span>
                    </div>
                    <span>Hours</span>
                </div>
                <p>:</p>
                <div class="number-bis-home-3">
                    <div>
                        <span>2</span>
                        <span>9</span>
                    </div>
                    <span>Days</span>
                </div>
                <p>:</p>
                <div class="number-bis-home-3">
                    <div>
                        <span>4</span>
                        <span>2</span>
                    </div>
                    <span>Hours</span>
                </div>
            </div>
        </div>
        <div class="div-bis-home-4">
            <div></div>
            <p><?php $weddingDate = date('2021-09-21'); echo $weddingDate; ?></p>
            <div></div>
        </div>
        <div class="div-bis-home-5">
            <div><i class="fas fa-arrow-down"></i></div>
            <button>More info</button>
        </div>
    </section>
</div>

<!-- Footer -->
<?php include('assets/footer.php'); ?>