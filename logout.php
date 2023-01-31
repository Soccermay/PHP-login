<?php
require_once('./functions/authentication.php');
logout();
header('Location: /');
die();