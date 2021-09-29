<?php
require_once 'includes/dbconnect.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">

<body class="container">
    <div class="bodypic">
        <div class="headertext">
        </div>
        <h1> Wonders of the World Collection </h1>
    <div class="container1">
        <nav class="navbar">
            <div class="hamburger-menu">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-link">Wonders of World</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Facts</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Input form</a>
                </li>
            </ul>


        </nav>
    </div>

        <section>
        <?php
        $wonders = getWonders($db);
        echo formatWonders($wonders);
        ?>
        </section>




    </div>
    <div>
        <h1> Form Input </h1>
    </div>
    <h1>Facts about the wonders of the world.</h1>
    <p class="factsforwonders">Facts about the wonders of the world.</p>

</body>
</html>
