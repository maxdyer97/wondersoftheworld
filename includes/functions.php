<?php


function getWonders($db): array {
    $query = $db->prepare("SELECT `name`, `location`, `yearmade`, `yearvisit`, `images` FROM `wonders`");

    $query->execute();
    return $query->fetchAll();

}

function formatWonders(array $allWonders): string {
    $str =  '';
//    echo '<pre>';
//    var_dump($allWonders);
//    echo '</pre>';

    foreach ($allWonders as $wonder) {
        $str .= '<p class>' . $wonder["name"] . '</p>';
        $str .= '<p>' . $wonder["location"] . '</p>';
        $str .= '<p>' . $wonder["yearmade"] . '</p>';
        $str .= '<p>' . $wonder["yearvisit"] . '</p>';
        $str .= '<p>' . $wonder["images"] . '</p>';


    }
    return $str;
}

function getImagePath(string $imagePath): string {
    $path = '';
    $imageStartsWith = substr($imagePath, 0, strlen('http'));
    if (!$imageStartsWith) {
        $path = 'https://via.placeholder.com/350/150';
    } elseif ($imageStartsWith === 'http') {
        $path = $imagePath;
    } else {
        $path = 'images/' . $imagePath;
    }
    return $path;
}

