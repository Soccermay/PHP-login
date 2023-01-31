<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/functions/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/functions/authentication.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/functions/validations.php');
if(!isLoggedIn()){
    echo "<h1>Login required</h1>";
    die();
}

$userId = currentUser();
$data = filter_input_array(INPUT_POST,[
    "postBody" => validateLengthRange(1,200),
    "publicPost" => validateCheckbox()
]);
if($_SESSION['REQUEST_METHOD'] == 'POST'){
    $data['userId'] = $userId;
    $data['data'] = $time();
    $data['publicPost'] = $data['publicPost']? 1 : 0;
    $pdo = getDb();
    $statement = $pdo->prepare('INSERT INTO posts(user_id,date,public,body)
                                VALUES(:userId,:data,:publicPost,:postBody):')
    $statement->execute($data);
    $rowCount = $statement->rowCount();
    var_dump($rowCount);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a post!</title>
</head>
<body>
    <h1>Add a new post:</h1>
    <form action="create.php">
        <label>
            Post body
            <textarea name="postBody"></textarea>
        </label>
