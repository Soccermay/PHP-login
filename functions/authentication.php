<?php
session_start();
include_once('db.php');
function isLoggedIn(){
    return isset($_SESSION['user_id']);
}function register($username,$password){
    $pdo = getDb();
    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    $statement = $pdo->prepare('INSERT INTO user');
}
function logout() {
    session_unset();
    session_destroy();
}