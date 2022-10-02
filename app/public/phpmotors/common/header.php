<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php
        if (isset($page_title)) { 
            echo $page_title;
        } else {
            echo "Home";
        } 
        ?> | PHP Motors
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/phpmotors/assets/images/delorean.ico" type="image/x-icon">
    <link rel="stylesheet" media="screen" href="/phpmotors/assets/styles/global.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/assets/styles/footer.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/assets/styles/header.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/assets/styles/navbar.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/assets/styles/main.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/assets/styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap">
</head>
<body> 
    <div class="container"> 
        <header>
            <div class="header-container">
                <div class="logo">
                    <img src="/phpmotors/assets/images/site/logo.png" alt="logo">
                </div>
                <div class="account">
                    <a href="#">My Account</a>
                </div>
            </div>
        </header>
        <nav>
            <div class="nav-bar">
                <button type="button" onclick="toggleMenu()">&equiv;</button>
                <div class="nav-links" id="links">
                    <ul>
                        <li>
                            <a href="/phpmotors/view/home.php" title="View the PHP Motors Home page">Home</a>
                        </li>
                        <li>
                            <a href="#" title="View the PHP Motors Classic page">Classic</a>
                        </li>
                        <li>
                            <a href="#" title="View the PHP Motors Sports page">Sports</a>
                        </li>
                        <li>
                            <a href="#" title="View the PHP Motors SUV page">SUV</a>
                        </li>
                        <li>
                            <a href="#" title="View the PHP Motors Trucks page">Trucks</a>
                        </li>
                        <li>
                            <a href="#" title="View the PHP Motors Used page">Used</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
