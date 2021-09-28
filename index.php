<?php
require_once 'includes/dbconnect.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
<!--    <link rel="stylesheet" href="css/stylesheet.css">-->
<head>
    <title> Wonders of the World Collection </title>
</head>
<body>


    <section>
        <h1> Wonders of the World</h1>
        <?php
        $wonders = getWonders($db);
        echo formatWonders($wonders);

        $allWonders .= '<img src="';
        $path = getImagePath($wonders['image']);
        $allWonders .= ($path . '" alt="Picture of ' . $wonders['name'] . '">');
        ?>

    </section>




</body>
</html>
