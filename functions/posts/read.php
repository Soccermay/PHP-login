<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/functions/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/functions/authentication.php');

$pdo = getDb();
$statement;
$searchId = $_GET['id'];

if(isLoggedIn()){
    $statement = $pdo->prepare("SELECT * FROM posts WHERE id=:searchId 
                                AND user_id=:userId
                                OR public=1");
}else{
    $statement = $pdo->prepare("SELECT * FROM posts WHERE id=:searchId
                                AND public=1");
    $statement->execute([
        'searchId'=>$searchId
    ]);
}
$result = $statement->fetch();
var_dump($result);