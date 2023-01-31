<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/functions/db.php');
$pdo = getDb();
$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();
$posts = $statement->fetchAll();
var_dump($posts);