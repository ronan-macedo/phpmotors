<?php
$page_title = "Home";
require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php';
?>
<main>
    <div class="content-container">
        <h1>Welcome to PHP Motors!</h1>
        <div class="hero">
            <div class="hero-img">
                <img src="/phpmotors/assets/images/delorean.jpg" alt="delorean">
                <div class="hero-caption">
                    <h3>DMC Delorean</h3>
                    <p>3 Cup holders</p>
                    <p>Superman doors</p>
                    <p>Fuzzy dice!</p>
                </div>
            </div>
            <div class="hero-link">
                <a href="#">
                    <img src="/phpmotors/assets/images/site/own_today.png" alt="own-today">
                </a>
            </div>
        </div>
        <div class="description">
            <div class="reviews">
                <h2>DMC Delorean Reiews</h2>
                <ul>
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly." (5/5)</li>
                    <li>"The most futuristic ride of our day." (4.5/5)</li>
                    <li>"80's livin and I love it!" (5/5)</li>
                </ul>
            </div>
            <div class="upgrades">
                <h2>Delorean Updates</h2>
                <div class="upgrade-grid">
                    <div class="upgrade-item">
                        <div class="img-box">
                            <img src="/phpmotors/assets/images/upgrades/flux-cap.png" alt="flux-capacitor">
                        </div>
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="upgrade-item">
                        <div class="img-box">
                            <img src="/phpmotors/assets/images/upgrades/flame.jpg" alt="flames">
                        </div>
                        <a href="#">Flame Decals</a>
                    </div>
                    <div class="upgrade-item">
                        <div class="img-box">
                            <img src="/phpmotors/assets/images/upgrades/bumper_sticker.jpg" alt="bumper-sticker">
                        </div>
                        <a href="#">Bumper Stickers</a>
                    </div>
                    <div class="upgrade-item">
                        <div class="img-box">
                            <img src="/phpmotors/assets/images/upgrades/hub-cap.jpg" alt="hub-cap">
                        </div>
                        <a href="#">Hub Caps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php';
?>
