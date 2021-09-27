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
        $str .= '<p>' . $wonder["name"] . '</p>';
        $str .= '<p>' . $wonder["location"] . '</p>';
    }
    return $str;
}

