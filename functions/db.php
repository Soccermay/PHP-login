<?php
function getDb() {
    $pdo = new PDO('sqlite:'.$_SERVER['DOCUMENT_ROOT'].'/database.sqlite3');

    return $pdo;
}