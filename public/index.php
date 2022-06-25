<?php
include __DIR__ . "/../functions.php";
$db = include __DIR__ . "/../database/start.php";

$posts = $db->getAll('posts');

dd($_SERVER['REQUEST_URI']);

include "index_view.php";
?>
